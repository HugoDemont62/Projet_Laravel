<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = "genre";
    public $timestamps = false;


    public function filmDans(){
        return $this->belongsToMany(Genre::class, 'film', 'id', 'idGenre');
    }

}
