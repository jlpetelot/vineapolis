<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait; // add this trait to your user model

    // On met cela pour éviter les erreurs du type : Call to a member function format() on string
    protected $dates = ['datefacture', 'created_at', 'updated-at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'role', 
        'imageprofil', 
        'password', 
        'remember_token', 
        'api_token',  
        'created_at',
        'datefacture',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    **/
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Méthode pedefs () pour la relation entre les tables users et pedefs
     * Ici la relation un user a plusieurs PDF
     *
     * @return $this->hasOne('App\Pedef');
    **/
    public function pedefs ()
    {
        return $this->hasMany('App\Pedef');
    }

     /**
     * Méthode factures () pour la relation entre les tables users et factures
     * Ici la relation un user a plusieurs factures
     *
     * @return $this->hasOne('App\Facture');
    **/
    public function factures ()
    {
        return $this->hasMany('App\Facture');
    }

    /**
     * Méthode vigneron () pour la relation entre les tables users et vignerons
     * Ici la relation un user correspond à un vigneron
     *
     * @return $this->hasOne('App\Vigneron');
    **/
    public function vigneron ()
    {
        return $this->hasOne('App\Vigneron');
    }

    /**
     * Méthode newsletter () pour la relation entre les tables users et newsletters
     * Ici la relation un user à une newsletters
     *
     * @rreturn $this->belongsTo(Newsletter::class);
    **/
    public function user ()
    {
        return $this->hasOne(Newsletter::class);
    }

    /**
     * Méthode profil () pour la relation entre les tables users et profils
     * Ici un utilisateur a un seul profil
     *
     * @return
     **/
    public function profil ()
    {
        return $this->hasOne('App\Profil');
    }

    /**
     * Méthode contacts () pour la relation entre les tables users et messages
     * Un utilisateur peut avoir un ou plusieurs messages
     *
     * @return
     **/
    public function contacts ()
    {
        return $this->hasMany('App\Message');
    }

    /**
    	* Méthode lines () pour la relation entre les tables users et lines
    	* Un utilisateur peut avoir un eou plusieurs lignes
        *
    	* @param
    	* @return $this->hasMany('App\Line');
    **/
    public function lines ()
    {
        return $this->hasMany('App\Line');
    }

    /**
    	* Méthode products () pour la relation entre les tables users et products
    	* Un utilisateur peut avoir un ou plusieurs produits
        *
    	* @param
    	* @return $this->hasMany('App\Product');
    **/
    public function products ()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Méthode motdepasse () pour la relation entre les tables users et motdepasses
     * Ici la relation un user possède un seul mot de passe
     *
     * @return $this->hasMany('Comment::class')
    **/
    public function motdepasse ()
    {
        return $this->hasOne('App\Modepasse');
    }

    /**
    	* Méthode paypal () pour la relation entre les tables users et paiementpaypals
    	* Un utilisateur peut avoir un ou plusieurs paypals
    	* @param
    	* @return
    **/
    public function paypal ()
    {
        return $this->hasMany('\App\Paiementpaypal');
    }

    /**
     * Méthode dateFormattedCreate () pour formater les dates des vignerons
     * pour la colonne created_at de la table vignerons
     *
     * @param $showTimes = false
     * @$this->created_at->format($format);
     **/
    public function dateFormattedCreate ($showTimes = false)
    {
        // $format = "d/m/Y à h:m:s";
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }

    /**
     * Méthode dateFormattedUpdate () pour formater les dates des vignerons
     * pour la colonne updated_at de la table vignerons
     *
     * @param $showTimes = false
     * @$this->created_at->format($format);
     **/
    public function dateFormattedUpdate ($showTimes = false)
    {
        // $format = "d/m/Y à h:m:s";
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->updated_at->format($format);
    }
}
