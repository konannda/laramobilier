<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $annonces)
 */
class Articles extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'tel', 'appelation', 'description', 'salon', 'localite', 'prix', 'superficie', 'chambre', 'douche', 'garage', 'type_offre', 'image', 'slug'];
}
