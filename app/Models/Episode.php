<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function season()
    {
        return $this->belongsTo(Season::class); //Um episódio pertence a uma temporada
    }
}
