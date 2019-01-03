<?php
namespace App\Http\Controllers\Backend;

use App\Facade\PayPal;
use App\Line;
use App\Annonceur;
use App\Paiement;
use App\Paiementpaypal;
use App\Panier;
use App\Product;
use App\Pub;
use App\Facture;
use App\User;
use App\Vigneron;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PayPal\Api\PaymentExecution;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;
use Carbon\Carbon;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

use App\Message;
use Illuminate\Support\Facades\Mail;

class AnnonceurPaiementController extends BackendController
{
    /**
    	* Méthode paiementstripe () pour que l'annonceur paye par Stripe
    	* On utilise les classes de Stripe dans le package que l'on vient de charger
        * use Stripe\Charge;
        * use Stripe\Customer;
        * use Stripe\Stripe;
        * les classes Stripe sont visibles sur /vendor/stripe
        *
    	* @param $request, $id
    	* return view('admin.annonceurs.paiementsreussis', compact('charge', 'panier', 'annonceur'));
    **/
    public function paiementstripe (Request $request, $id)
    {
        // On récupère l'id de l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // !!!!!!! ON VÉRIFIE SI IL N'Y A PAS DE LINE DÉJÀ PRÉSENTE POUR L'ANNONCEUR !!!!!!
        $line = Line::orderBy('id', 'desc')->first();

        // On récupère le total du panier
        $total = Cart::total();
        // On récupère l'id du produit
        $product_id = $request->product_id;

        // On récupère le nom du produit et la quantité demandée
        $item = Cart::content()->first();
        $produit = $item->name;
        $qty = $item->qty;

        // Si oui, on redirige vers la page annulation 406 qui décrit le paiement de trop de l'annonceur et on vide la carte
        if ($line && $line->created_at < $line->created_at->addYear(1) ) 
        {
            // // On met diffForHumans() en locale avec la classe 
            // \Carbon\Carbon::setLocale('fr');
            // // On définit la date
            // $date = $line->created_at->addYear(1);
            // // On retourn la vue
            // return view('admin.annonceurs.dejapaye', compact('annonceur', 'date'));
        }
        //.. !!!!!!! ON VÉRIFIE SI IL N'Y A PAS DE LINE DÉJÀ PRÉSENTE POUR L'ANNONCEUR' !!!!!!

        // On tente de passer les données à Stripe
        try {
            // On charge notre clé secrète
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            // On créé un client
            $customer = Customer::create([
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ]);
            $charge = Charge::create([
                'customer' => $customer->id,
                // Le total est exprimé en centimes dans Stripe, on doit donc multiplier par 100
                'amount' => $total * 100,
                'currency' => 'eur'
                // On peut mettre plus d'options avec Stripe, à voir.
            ]);

            // On sauvegarde dans la BDD (on applique la méthode saveTransaction() écrite plus en dessous de celle-ci)
            $panier = $this->saveTransaction($charge, 'Stripe', $product_id);

            // On récupère la dernière pub achetée avant d'envoyer le mail
            $pub = Pub::where('annonceur_id', $annonceur->id)
            ->orderBy('updated_at', 'desc')
            ->first();

            /*=============== APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN MAIL À L'INTÉRESSÉ ET À L'ADMIN ==============*/
            // On créé le message pour les mails
            $message = Message::create([
                'name'          => $annonceur->societe,
                'email'         => $annonceur->email,
                'sujet'         => "Achat de l'annonce ".$pub->label.', dans la région '.$pub->categorie.' au format '.$pub->format.' et au prix de ' . number_format($total, 2, ',', ' '). ' € TTC',
                'role'          => 'annonceur',
                'contenu'       => "Payé pour une durée de : ".$qty."an(s) par Carte Bancaire",
                'motdepasse'    => NULL,
                'user_id'       => $annonceur->user_id
            ]);

            // Envoi de 2 emails, 1 à la personne qui a payé la transaction et 1 à l'administration du site
            // la personne qui a payé
            Mail::to($annonceur->email)->send(new \App\Mail\Paiementannonceur($message));
            // à l'admin
            Mail::to(env('TO_MAIL'))->send(new \App\Mail\Paiementannonceur($message));
            /*=============== ../APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN MAIL À L'INTÉRESSÉ ET À L'ADMIN ==============*/

        }   catch (Exception $e) {

            return $e->getMessage();
        }

        // on retourne sur une vue qui annoncera l'issue du paiement et le résumé d'achat du panier
        return view('admin.annonceurs.paiementsreussis', compact('charge', 'panier', 'annonceur', 'qty', 'produit'));
    }

    /**
     * Méthode saveTransaction () pour sauvegarder les transactions de Stripe dans la BDD
     *
     * @param $charge, $type
     * @return $panier;
     **/
    public function saveTransaction ($charge, $type, $product_id)
    {
        // On récupère le dernier paiement de l'annonceur, par le user_id qui est aussi l'id du user 
        $annonceur = Annonceur::where('user_id', Auth::user()->id)
                    ->orderBy('id', 'desc')
                    ->first();

        // On enregistre l'annonceur comme payé (colonne paye de la table annonceurs)
        $annonceur['paye'] = 1;
        $annonceur->save();

        // On récupère le total
        $total = Cart::total();
        // On récupère tout le contenu de la carte
        $cart = Cart::content();

        // Sauvegarde du panier
         $panier = Panier::create([
            'user_id'   => Auth::user()->id,
            'total'     => $total
        ]);
        
        // On récupère la quantité et le prix
        $item = Cart::content()->first();
        $produit = $item->name;
        $qty = $item->qty;
        $prix = $item->price;

        // Sauvegarde du contenu du contenu des lignes
        foreach($cart as $line)
        {
            Line::create([
                'product_id'    => $product_id,
                'panier_id'     => $panier->id,
                'user_id'       => Auth::user()->id,
                'qte'           => $qty,
                'prix'          => number_format($prix, 2, '.', ''),
                'type'          => $type,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()->addYears($qty)
            ]);
        }

        // On récupère la dernière ligne qui vient d'être enregistrée :
        $line = Line::orderBy('id', 'desc')->first();

        // On récupère le produit :
        $produit = Product::where('id', $line->product_id)->first();

        // La partie paiement
        $paiement = Paiement::create([
            'panier_id'     => $panier->id,
            'data'          => json_encode($charge),
            'type'          => $type,
            'created_at'    => $line->created_at,
            'updated_at'    => $line->updated_at
        ]);

        // Création d'une facture dans la BDD
        $facture = Facture::create([
            'name'              => Auth::user()->name,
            'email'             => Auth::user()->email,
            'adresse'           => !empty($annonceur->adresse) ? $annonceur->adresse : NULL,
            'telephone'         => !empty($annonceur->telephone) ? $annonceur->telephone : NULL,
            'identiteunique'    => $charge['id'],
            'produit'           => $produit->name,
            'qte'               => $line->qte,
            'duree'             => $line->qte,
            'type'              => "Stripe",
            'prixHT'            => number_format($line->prix, 2, '.', ''),
            'soustotalHT'       => number_format($line->prix * $line->qte, 2, '.', ''),
            'tva'               => number_format($line->prix * $line->qte * 0.2, 2, '.', ''),
            'totalTTC'          => number_format($line->prix * $line->qte * 1.2, 2, '.', ''),
            'user_id'           => Auth::user()->id,
            'created_at'        => $line->created_at,
            'datefacture'       => $line->created_at,
            'updated_at'        => $line->updated_at
        ]);

        // On récupère la dernière pub concernée pour l'activer
        $pub = Pub::where('product_id', $product_id)->first();
        $pub->actif = 1;
        $pub->save();

        // Une fois tout fait, on vide la carte :
        Cart::destroy();

        // On retourne l'info du panier
        return $panier;
    }

    /**
    	* Méthode paiementpaypal () pour que l'annonceur paye par PayPal
    	*
    	* @param $id
    	* @return
    **/
    public function paiementpaypal ($id)
    {
        // On récupère l'id de l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On récupère le nom du dernier produit enregistré
        $pub = Pub::where('annonceur_id', $id)->orderBy('id', 'desc')->first();
        $produit = "Dans la région de $pub->categorie, l'annonce $pub->label, d'un format de $pub->format";
    
        // On récupère le total du panier
        $total = Cart::total();
        
        // On récupère le contenu du panier
        $cart = Cart::content();
        
        // On récupère la quantité du panier
        $article = Cart::content()->first();
        $qty = $article->qty;

        // On récupère la taxe du panier
        $tax = Cart::tax();

        // On récupère le HT du panier
        $subtotal = Cart::subtotal();
        
        // On créé une variable $apiContext à partir de la classe apiContext () que l'on a créé dans app\Facade\PayPal.php
        $apiContext = PayPal::apiContext();

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        // On va chercher tous les produits achetés dans la carte
        $i=1;
        $item[$i] = new Item();

        foreach ($cart as $product)
        {
            $item[$i]->setName($product->name)
                ->setCurrency('EUR')
                ->setQuantity($product->qty)
                ->setSku($product->id)
                ->setPrice($product->price);
        }

        $itemList = new ItemList();
        $itemList->setItems(array($item[$i],));

        $details = new Details();
        $details->setShipping("0")
            ->setTax($tax)
            ->setSubtotal($subtotal);

        $amount = new Amount();
        $amount->setCurrency("EUR")
            ->setTotal($total.$qty)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription($produit)
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('admin.annonceurs.paiement.paypal.execute', $annonceur->id))
                     ->setCancelUrl(route('admin.annonceurs.paiement.paypal.cancel', $annonceur->id));

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try
        {
            $payment->create($apiContext);
        } catch (\Exception $ex)
        {
            print("Created Payment Using PayPal. Please visit the URL to Approve.". $request);
            exit(1);
        }

        // Quand le paiement PayPal est initié, on redirige directement vers le paiement paypal ($approvalUrl);
        $approvalUrl = $payment->getApprovalLink();
        return redirect($approvalUrl);

        // Test pour les variables
        // print("Created Payment Using PayPal. Please visit the URL to Approve.". "<a href='" . $approvalUrl . "' >" .$approvalUrl . "</a>");
        // return $payment;
    }


    /**
    	* Méthode paiementpaypalexecute () pour le succès du paiement PayPal
    	*
    	* @param $id
    	* return view('admin.annonceurs.paiementreussipaypal', compact('total', 'tax', 'subtotal', 'qty', 'id', 'description', 'paymentInfo', 'result'));
     **/
    public function paiementpaypalexecute ($id)
    {
        // On récupère l'id de l'annonceur
        $annonceur = Annonceur::findorFail($id);
        // On récupère le total du panier
        $total = Cart::total();
        // On récupère le contenu du panier
        $tax = Cart::tax();
        // On récupère le HT du panier
        $subtotal = Cart::subtotal();
        // On récupère la quantité du panier
        $article = Cart::content()->first();
        $qty = $article->qty;

        // On récupère la pub et le nom du produit
        $pub = Pub::where('annonceur_id', $annonceur->id)->first();
        $product = Product::where('id', $pub->product_id)->first();

        // On récupère le user_id de l'annonceur
        $id = $annonceur->user_id;

        // On créé une variable $apiContext à partir de la classe apiContext () que l'on a créé dans app\Facade\PayPal.php
        $apiContext = PayPal::apiContext();

        // Get the payment Object by passing paymentId
        // payment id was previously stored in session in
        // CreatePaymentUsingPayPal.php
        $paymentId = $_GET['paymentId'];
        $payment = Payment::get($paymentId, $apiContext);

        // ### Payment Execute
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId($_GET['PayerID']);

        // ### Optional Changes to Amount
        // If you wish to update the amount that you wish to charge the customer,
        // based on the shipping address or any other reason, you could
        // do that by passing the transaction object with just `amount` field in it.
        // Here is the example on how we changed the shipping to $1 more than before.
        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $details->setShipping("0")
            ->setTax($tax)
            ->setSubtotal($subtotal);

        $amount->setCurrency('EUR');
        $amount->setTotal($total.$qty);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        // Add the above transaction object inside our Execution object.
        $execution->addTransaction($transaction);

        try {
            // Execute the payment
            // (See bootstrap.php for more on `ApiContext`)
            $result = $payment->execute($execution, $apiContext);

            // print("Executed Payment 1" . $payment->getId() . "Results: " . $result);

            try {
                $payment = Payment::get($paymentId, $apiContext);

                $paymentInfo = json_decode($payment);

                /*=============== INTÉGRATION DES DONNÉES DANS LA BDD ==============*/
                // On rassemble les données pour la table paiementpaypals
                $paypal = [
                    'email'             => $paymentInfo->payer->payer_info->email,
                    'nomfacture'        => $paymentInfo->cart,
                    'identiteunique'    => $paymentInfo->transactions[0]->invoice_number,
                    'produit'           => $product->name,
                    'datefacture'       => \Carbon\Carbon::now(),
                    'type'              => $paymentInfo->payer->payment_method,
                    'prixHT'            => $paymentInfo->transactions[0]->item_list->items[0]->price,
                    'qte'               => $paymentInfo->transactions[0]->item_list->items[0]->quantity,
                    'soustotalHT'    	=> $paymentInfo->transactions[0]->amount->details->subtotal,
                    'tva'               => $paymentInfo->transactions[0]->amount->details->tax,
                    'prixTTC'    		=> $paymentInfo->transactions[0]->related_resources[0]->sale->amount->total,
                    'user_id'           => $annonceur->user_id
                ];

                // On enregistre un nouveau paiement PayPal dans la table paiementpaypals
                Paiementpaypal::create($paypal);

                // On enregistre l'annonceur comme payé
                $annonceur['paye'] = 1;
                $annonceur->save();

                // On enregistre la pub comme activée (prise)
                $pub['actif'] = 1;
                $pub->save();

                // On rassemble les données pour la table paniers
                $donneespanier = [
                    'user_id'   => $annonceur->user_id,
                    'total'     => $paymentInfo->transactions[0]->related_resources[0]->sale->amount->total
                 ];

                // On enregistre un nouveau panier PayPal dans la table paniers
                Panier::create($donneespanier);

                // On récupère le dernier id du panier enregistré que l'on appliquera à la table lines
                $panier = Panier::orderBy('id', 'desc')->first();

                // On définit la quantité
                $qte = $paymentInfo->transactions[0]->item_list->items[0]->quantity;

                // // On rassemble les données pour la table lines
                $line = [
                    'product_id'    => $product->id,
                    'panier_id'     => $panier->id,
                    'user_id'       => $annonceur->user_id,
                    'prix'          => $paymentInfo->transactions[0]->amount->details->subtotal,
                    'qte'           => $qte,
                    'type'          => $paymentInfo->payer->payment_method,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($qte)
                ];

                // On enregistre un nouveau line PayPal dans la table lines
                Line::create($line);

                // // On rassemble les données pour la table paiements
                $paiement = [
                    'panier_id'     => $panier->id,
                    'data'          => $payment,
                    'type'          => $paymentInfo->payer->payment_method,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()->addYears($qte)
                ];

                // On enregistre un nouveau paiement PayPal dans la table paiements
                Paiement::create($paiement);

                // On va chercher le nom du produit dans l'enregistrement PayPal de la BDD
                $paypal = Paiementpaypal::orderBy('id', 'desc')->first();

                $facture = Facture::create([
                    'name'              => Auth::user()->name,
                    'email'             => $paymentInfo->payer->payer_info->email,
                    'adresse'           => !empty($annonceur->adresse) ? $annonceur->adresse : NULL,
                    'telephone'         => !empty($annonceur->telephone) ? $annonceur->telephone : NULL,
                    'identiteunique'    => $paymentInfo->transactions[0]->invoice_number,
                    'produit'           => $product->name,
                    'qte'               => $paymentInfo->transactions[0]->item_list->items[0]->quantity,
                    'duree'             => $paymentInfo->transactions[0]->item_list->items[0]->quantity,
                    'type'              => "PayPal",
                    'prixHT'            => $paymentInfo->transactions[0]->item_list->items[0]->price,
                    'soustotalHT'       => $paymentInfo->transactions[0]->amount->details->subtotal,
                    'tva'               => $paymentInfo->transactions[0]->amount->details->tax,
                    'totalTTC'          => $paymentInfo->transactions[0]->related_resources[0]->sale->amount->total,
                    'user_id'           => Auth::user()->id,
                    'created_at'        => Carbon::now(),
                    'datefacture'       => Carbon::now(),
                    'updated_at'        => Carbon::now()->addYears($qte)
                ]);
                /*=============== ../INTÉGRATION DES DONNÉES DANS LA BDD ==============*/

                /*=============== APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN MAIL À L'INTÉRESSÉ ET À L'ADMIN ==============*/
                // On créé le message pour les mails
                $message = Message::create([
                    'name'          => $annonceur->societe,
                    'email'         => $paymentInfo->payer->payer_info->email,
                    'sujet'         => "Achat de l'annonce ".$pub->label.', dans la région '.$pub->categorie.' au format '.$pub->format.' et au prix de ' . number_format($total, 2, ',', ' '). ' € TTC',
                    'role'          => 'annonceur',
                    'contenu'       => "Payé pour une durée de : ".$paymentInfo->transactions[0]->item_list->items[0]->quantity."an(s) par PayPal",
                    'motdepasse'    => NULL,
                    'user_id'       => $annonceur->user_id
                ]);

                // Envoi de 2 emails, 1 à la personne qui a payé la transaction et 1 à l'administration du site
                // la personne qui a payé
                Mail::to($annonceur->email)->send(new \App\Mail\Paiementannonceur($message));
                // à l'admin
                Mail::to(env('TO_MAIL'))->send(new \App\Mail\Paiementannonceur($message));
                /*=============== ../APRÈS LA TRANSACTION RÉUSSIE, ENVOI D'UN MAIL À L'INTÉRESSÉ ET À L'ADMIN ==============*/


            } catch (\Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            // print("Get Payment 1");
            // exit(1);

                return redirect(route('admin.annonceurs.paiementreussi.paypal', $annonceur->user_id));
            }
        } catch (\Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            // print("Executed Payment 2");
            // exit(1);

            return redirect(route('admin.annonceurs.paiementreussi.paypal', $annonceur->user_id));
        }

        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        // print("Get Payment 2" . $payment->getId());

        return redirect(route('admin.annonceurs.paiementreussi.paypal', $annonceur->user_id));
        //return $payment;
    }

    /**
    	* Méthode paiementreussipaypal () pour afficher la vue du paiement réussi de PayPal
    	*
    	* @param $id
    	* @return view('admin.annonceurs.paiementreussipaypal', compact('id', 'paypal'));
    **/
    public function paiementreussipaypal ($id)
    {
        // // On récupère l'id de l'annonceur
        $annonceur = Annonceur::where('user_id', $id)->first();

        $user = User::where('id', $annonceur->user_id)->first();

        // // On détruit la carte :
        Cart::destroy();

        // // On va chercher le paiment Paypal
        $paypal = Paiementpaypal::where('user_id', $annonceur->user_id)->orderBy('id', 'desc')->first();

        return view('admin.annonceurs.paiementreussipaypal', compact('id', 'paypal'));
        // return "C'est le paiement réussi";
    }

    /**
    	* Méthode paiementpaypalcancel () pour annuler le paiment de Paypal
    	*
    	* @param $id
    	* return view('admin.vignerons.vignerons.cancelpaypal', compact('vigneron', 'id'));
    **/
    public function paiementpaypalcancel ($id)
    {
        // On récupère le dernier segment de l'url de l'annulation
        $url = request()->segment(6);

        // On récupère l'user_id de l'annonceur
        $annonceur = Annonceur::findOrFail($id);

        // On renvoit à une vue qui perettra d'annuler définitivement la commande
        return view('admin.annonceurs.cancelpaypal', compact('annonceur'));
    }
}
