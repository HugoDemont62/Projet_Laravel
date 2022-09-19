<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller{
    public function index(){
        return view('index');
       // return back();
       // return redirect("/article");
    }
    public function about(){
        return view('about');

    }
    public function films(){
        $films = DB::select("SELECT * FROM film");
        return view('films', ["films" => $films]);

    }
    public function personnes(){
        $personnes = DB::select("SELECT * FROM personne");
        return view('personnes', ["personnes" => $personnes]);

    }
    public function article($id){
        return view('article', ["id"=>$id]);

    }
    public function film($id){
        $film = DB::select("SELECT * FROM film WHERE id=?", [$id]);
        if (count($film)==0){
            abort("404");
        }
        $film = $film[0];
        if ($film->idRealisateur != null){
            $real = DB::select("SELECT * FROM personne WHERE id = ?",[$film->idRealisateur]);
            $real = $real[0];
        }else{
            $real = false;
        }

        return view('film', ["film"=>$film, "realisateur"=>$real]);

    }
    public function personne($id){
        $personne = DB::select("SELECT * FROM personne WHERE id = $id");
        if (count($personne)==0){
            abort("404");
        }
        $personne = $personne[0];
        if ($personne->id != null){
            $directed = DB::select("SELECT * FROM film WHERE idRealisateur = ?",[$personne->id]);
        }else{
            $directed = false;
        }
        return view('personne', ["personne"=>$personne, "directed"=>$directed]);

    }

}
