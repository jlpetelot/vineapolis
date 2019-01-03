<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GestionimagesController extends Controller
{

    /**
     * Méthode gestionimages () pour gérer les images, toutes les images
     *
     * @return view('admin.images.gestionimages');
     **/
    public function gestionimages ()
    {
        return view('admin.images.gestionimages');
    }

}
