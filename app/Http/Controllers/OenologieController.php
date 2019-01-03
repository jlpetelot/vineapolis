<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OenologieController extends Controller
{
    public function index()
    {
        $header = "Vineapolis | Oenologie";
        return view("oenologie", compact('header'));
    }
}
