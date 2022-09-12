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
        return view('film', ["id"=>$id]);

    }
    public function personne($id){
        $personne = DB::select("SELECT * FROM personne WHERE id = $id");
        return view('personne', ["id"=>$id, "personne" => $personne]);

    }

}
