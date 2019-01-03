<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    // Les 3 champs de la table paiements que l'on autorise à être remplis
    protected $fillable = ['panier_id', 'data','type', 'created_at', 'updated_at'];

    /**
     * Méthode panier () pour la relation entre les tables paiements et paniers
     * un paiement (une commande) appartient à un seul panier
     *
     * return $this->belongsTo('App\Panier');
     **/
    public function panier ()
    {
        return $this->belongsTo('App\Panier');
    }

    /**
     * Méthode dateFormatted () pour formater les dates
     *
     * @param $showTimes = false
     * @$this->created_at->format($format);
     **/
    public function dateFormatted ($showTimes = false)
    {
        // $format = "d/m/Y à h:m:s";
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }
}
