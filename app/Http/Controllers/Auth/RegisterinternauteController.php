<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

// Obligatoire pour surclasser la méthode register de vendor/laravel
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Crypt;

class RegisterinternauteController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Métode showRegistrationForm () qui surclasse la méthode showRegistrationForm /vendor/illuminate/laravel d'origine
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm ()
    {
        return view('auth.registerinternaute');
    }

    /**
     * Métode registerinternautepost () qui surclasse la méthode register /vendor/illuminate/laravel d'origine
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerinternautepost (Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create (array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'role'      => "internaute",
            'password'  => Hash::make($data['password'])
        ]);
    }

    /**
     * Méthode showRegistrationForm () qui surclasse la méthode showRegistrationForm () du fichier RegistersUsers.php
     * des dépendances de Laravel :
     * (/vendor/laravel/framework/src/Illuminate/Foundation/Auth/RegistersUsers.php)
     *
     * @abort(401);
     **/
//    public function showRegistrationForm ()
//    {
//        abort(401);
//    }

    /**
     * Méthode showRegistrationForm () qui surclasse la méthode register () du fichier RegistersUsers.php
     * des dépendances de Laravel :
     * (/vendor/laravel/framework/src/Illuminate/Foundation/Auth/RegistersUsers.php)
     *
     * @abort(401);
     **/
//    public function register (Request $request)
//    {
//        abort(401);
//    }
}
