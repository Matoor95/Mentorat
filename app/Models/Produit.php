<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $fillable = [
        'id','libelle','price'
    ];
}
// ORM Objet Relational Mapping qui nous permet une interface intuitive par interagir avec notre base de donnes via les modele php au lieu nde faire des requetes sql complexwes

