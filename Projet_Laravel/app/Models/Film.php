<?php

namespace App\Models;

use Faker\Provider\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "film";
    public $timestamps = false;

    public function realisateur(){
        return $this->belongsTo(Personne::class, 'idRealisateur');
    }



}
