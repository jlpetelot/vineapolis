<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    // Les 4 champs de la table lines que l'on autorise à être remplis
    protected $fillable = ['product_id', 'panier_id', 'user_id', 'prix', 'qte', 'type', 'created_at', 'updated_at'];


    /**
    	* Méthode user () pour la relation entre les tables lines et users
    	* Une ligne (ordre de commande) appartient à une seule ligne de commande
        *
    	* @param
    	* @return $this->belongsTo('App\User');
    **/
    public function user ()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * Méthode panier () pour la relation entre les tables lines et paniers
     * Une ligne (ordre de commande) appartient à un seul panier
     *
     * return $this->belongsTo('App\Panier');
     **/
    public function panier ()
    {
        return $this->belongsTo('App\Panier');
    }

    /**
     * Méthode product () pour la relation entre les tables lines et products
     * une ligne (ordre de commande) appartient à un seul produit
     *
     * return $this->belongsTo('App\Product');
     **/

    public function product ()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Méthode scopeFilter () pour rechercher les vignerons en fonction du nom de la société ou de l'email
     *
     * @param query, $term
    **/
    public function scopeFilter ($query, $term)
    {
        // Un terme de recherche est-il entré ?
        if ($term)
        {
            $query->where(function($q) use ($term)
            {
                $q->where('societe', 'LIKE', "%{$term}%")
                ->orwhere('email', 'LIKE', "%{$term}%");
            });
        }
    }
}
