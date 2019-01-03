<?php

namespace App\Http\Controllers\Backend;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanierVigneronController extends BackendController
{

    /**
    	* Méthode index () pour afficher le contenu du panier du vigneron
    	*
    	* @param
    	* @return
    **/
    public function index ()
    {
        $panier = Cart::content();

        dd($panier);

    }

}
