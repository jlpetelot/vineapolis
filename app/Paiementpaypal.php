<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiementpaypal extends Model
{
    // On met cela pour éviter les erreurs du type : Call to a member function format() on string
    protected $dates = ['datefacture', 'created_at', 'updated_at'];

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
        'user_id',
        'created_at',
        'updated_at'
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
