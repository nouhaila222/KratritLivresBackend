<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function livre()
    {
        return $this->belongsTo(Livre::class, 'livre_id', 'id');
    }
}
