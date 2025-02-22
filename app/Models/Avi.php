<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    protected $fillable = [
        "user_id",
        "livre_id",
        "contenu"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function livre()
    {
        return $this->belongsTo(Livre::class, "livre_id", "id");
    }
}
