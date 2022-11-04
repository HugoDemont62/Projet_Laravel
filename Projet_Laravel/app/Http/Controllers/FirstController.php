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

    public function genres(){
        return view('genres', ["genres"=>Genre::all()]);
    }
    public function genre($id){
        $genre = Genre::findOrFail($id);
        return view('genre',["genre"=>$genre]);
    }

    public function films(){
        //$films = Film::whereRaw("annee > 2000")->orderBy("nbSpectateurs")->get();
        return view('films', ["films" => Film::all()]);
    }
    public function film($id){
        $film = Film::findOrFail($id);
        return view('film', ["film" => $film]);
    }

    public function personnes(){
        $personnes = Personne::all();
        return view('personnes', ["personnes" => $personnes]);
    }
    public function personne($id){
        $personne = Personne::findOrFail($id);
        return view('personne', ["personne" => $personne]);
    }




}
