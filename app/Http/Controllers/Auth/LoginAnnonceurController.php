<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginAnnonceurController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm ()
    {
        return view('auth.loginannonceur');
    }

    /**
     * Méthode logout () qui surclasse la méthode logout () du fichier AuthenticatesUsers.php
     * des dépendances de Laravel :
     * (/vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesUsers.php)
     *
     * @param Request $request
     * @return redirect('/login');
     **/
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect(route('loginannonceur'));
    }

}
