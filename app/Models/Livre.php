<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{

    public function avis()
    {
        return $this->hasMany(Avi::class, 'livre_id', 'id');
    }


    public function locations()
    {
        return $this->hasMany(Location::class, 'livre_id', 'id');
    }


    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}
