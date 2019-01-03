<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'contenu', 'delai' ];

}
