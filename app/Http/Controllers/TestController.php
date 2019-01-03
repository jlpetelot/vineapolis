<?php

namespace App\Http\Controllers;

use App\Vigneron;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index ()
    {
        $vignerons = Vigneron::all();
        $header = "Vineapolis | Tous les vins";


        return view("test", compact('header', 'vignerons'));
    }
}
