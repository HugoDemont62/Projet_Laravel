<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Joue;
use App\Models\Personne;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function index(){
        //$f = new Film();
        //$f->titre = "Le film de l'annee";
        //$f->annee = 2022;
        //$f->nbSpectateurs = 1000;
        //$f->save();

        //$f = Film::findOrFail(38);
        //$f->delete();
        //dd($f);

        //$f = Film::findOrFail(39);
        //$f->nbSpectateurs = 99990;
        //$f->save();
        //dd($f);

        //$film = Film::all();
        //dd($film);
        //die(1);

        //$f = Film::find(27);
        //echo $f->realisateur->nom;


        return view('index');
        // return back();
        // return redirect("/article");
    }

    public function about(){
        return view('about');
    }

    public function films(){
        //$films = Film::whereRaw("annee > 2000")->orderBy("nbSpectateurs")->get();
        $films = Film::all();
        return view('films', ["films" => $films]);
    }

    public function personnes(){
        $personnes = Personne::all();
        return view('personnes', ["personnes" => $personnes]);
    }

    public function film($id){
        $film = Film::findOrFail($id);
        if ($film->idRealisateur != null) {
            $real = $film->realisateur;
        } else {
            $real = false;
        }
        return view('film', ["film" => $film, "realisateur" => $real]);
    }

    public function personne($id){
        $personne = Personne::findOrFail($id);
        if ($personne->id != null) {
            $directed = $personne->realisation;
        } else {
            $directed = false;
        }
        return view('personne', ["personne" => $personne, "directed" => $directed]);
    }
}
