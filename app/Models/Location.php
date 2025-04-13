<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // Autorise l'insertion en masse de ces champs
    protected $fillable = [
        'user_id',
        'livre_id',
        'date_debut',
        'date_fin',
    ];

    // Relation vers l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation vers le livre
    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }
}

