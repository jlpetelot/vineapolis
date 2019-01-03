<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // On permet les 14 colonnes à remplir
    protected $fillable = [
        'name',
        'adresse',
        'telephone',
        'email',
        'identiteunique',
        'produit',
        'datefacture',
        'qte',
        'duree',
        'type',
        'prixHT',
        'soustotalHT',
        'tva',
        'totalTTC',
        'user_id'
    ];
}
