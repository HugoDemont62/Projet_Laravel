<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller{
    public function index(){
        return view('index');
       // return back();
       // return redirect("/article");
    }
    public function about(){
        return view('about');

    }
    public function article($id){
        return view('article', ["id"=>$id]);

    }

}
