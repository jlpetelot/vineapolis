<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiementpaypal extends Model
{
    // On permet les 11 colonnes à remplir
    protected $fillable = [
        'email',
        'nomfacture',
        'identiteunique',
        'produit',
        'datefacture',
        'type',
        'prixHT',
        'qte',
        'soustotalHT',
        'tva',
        'prixTTC',
        'user_id'
    ];


    /**
    	* Méthode user () Méthode paypal () pour la relation entre les tables paiementpaypals et users
    	* Un paiement Paypal a un seu utilsateur

    	* @param
    	* @return
    **/
    public function user ()
    {
        return $this->belongsTo('\App\User');
    }
}
