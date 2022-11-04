<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table = "personne";
    public $timestamps = false;


    public function realisation(){
        return $this->hasMany(Film::class, "idRealisateur");
    }

}
