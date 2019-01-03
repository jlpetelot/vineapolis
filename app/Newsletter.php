<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{

    protected $fillable = [
        'inscrit', 'user_id'
    ];

    /**
     * Méthode user () pour la relation entre les tables newsletters et users
     * Ici la relation une newsletter appartient à un user
     *
     * @rreturn $this->belongsTo(User::class);
    **/
    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
