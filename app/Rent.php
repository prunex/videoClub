<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model {

//
    protected $table = "alquilos";
    protected $fillable = ["user_id", "movie_id", "fecha_alquilo", "fecha_devuelta"];

    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }

    public function movie() {
        return $this->belongsTo(Movie::class, "movie_id");
    }

}
