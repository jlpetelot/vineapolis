<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Comment extends Model
{   

    protected $fillable = [
        'body',
        'name',
        'image_profil',
        'reponse',
        'vigneron_id',
        'created_at',
        'updated_at'
    ];

    /**
     * Méthode vigneron () pour la relation entre les tables comments et vignerons
     * Ici la relation un commentaire appartient à un seul vigneron
     *
     * @return $this->belongsTo('Vigneron::class');
    **/
    public function vigneron ()
    {
        return $this->belongsTo('App\Vigneron');
    }

    /**
     * Méthode getBodyHtmlAttribute () pour convertir l'html du champ body en markdown
     *
     * @return Markdown::convertToHtml(e($this->body));
    **/
    public function getBodyHtmlAttribute ()
    {
        return Markdown::convertToHtml(e($this->body));
    }

    /**
     * Méthode getreponseHtmlAttribute () pour convertir l'html du champ reponse en markdown
     *
     * @return Markdown::convertToHtml(e($this->reponse));
    **/
    public function getReponseHtmlAttribute ()
    {
        return Markdown::convertToHtml(e($this->reponse));
    }
}
