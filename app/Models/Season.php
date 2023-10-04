<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(Serie::class); //Uma temporada pertence a uma série
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class); //Uma temporada possui vários episódios
    }
}
