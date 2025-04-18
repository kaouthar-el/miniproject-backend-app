<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable = [
        "valeur1",
        "valeur2",
        "valeur3",
        "valeur4",
        "moyenne", 
    ];
}
