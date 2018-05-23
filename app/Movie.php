<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rent;
use App\Movie;

class Movie extends Model
{
    //
    public function users(){
        return $this->belongsToMany(Movie::class)->withPivot("fecha_alquilo", "fecha_devuelta");
    }
    
}
