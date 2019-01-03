<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motdepasse extends Model
{
    protected $fillable = ['modepasse', 'user_id'];

    /**
     * Méthode user () pour la relation entre les tables motdepasses et users
     * Ici la relation un mot de passe apaprtient à un seul user
     *
     * @return $this->hasMany('Comment::class')
    **/
    public function user ()
    {
        return $this->belongsTo('App\User');
    }

}
