<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function contact()
    {
        // Ici, nous récupérons les variables via un formulaire
        $title = "Ce mail vous est envoyé par Contact de Vineapolis";
        $content = "Je suis le contenu du mail";
        $useremail = "jlpetelot@vineapolis.fr";
        $username = "Jean-Luc Petelot";

        try
        {
            // Nous redéfinissons chaque variable que nous mettons dans un tableau $data
            $data = [
                'email'     => $useremail,
                'username'  => $username,
                'subject'   => $title,
                'content'   => $content
            ];

            // Grâce à la façade Mail qui chapotte Swift, nous envoyons le mail
            // En 1er paramètre, nous envoyons ce mail à 2 vues, la 1ère pour la version HTML (emails.contact)
            // et la seconde pour la version text (emails.contact-text)
            // En second paramètre, nous envoyons les données reçues, toujours à la vue, grâce à $data
            // En 3ème paramètre, c'est une fonction de closure qui envoit les en-têtes de l'email.
            // On utilise use($data), car on ne peut pas envoyer des données $data en dehors de la closure
            Mail::send(['emails.contact', 'emails.contact-text'], $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('contact@vineapolis.fr');
                $message->to($data['email'], 'jlpetelot@vineapolis.fr')->subject($subject);
            });

            return redirect('/contact')->with('status', 'Votre email nous est parvenu avec succès.');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());

        }

        // return redirect('/');
        // ou le status à envoyer à Ajax

        /* Si la route est nommée (faire php artisan route:list en ligne de commande).
        Par exemple, ici la route pour aller à la vue welcome se nomme home
        (j'ai ajouté un nom) :
        Route::get('/', function () {
            return view('welcome');
        })->name('home');
        on peut faire : */
        // return redirect()->route('home', [$username]); ce qui passera le username dans l'url renvoyé
        // On modifiera bien sûr la vue en rapport, ici, c'est la vue welcome.blade.php

        // On peut aussi renvoyer le status à la vue, une dans lequel on aur ajouté le statut :
        /*
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        // ou le status à envoyer en Ajax
        */

    }
}
