<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        return view ("index");
    }

    public function experiences (){
        return view ("experiences");
    }

    public function competences (){
        return view ("competences");
    }

    public function formations (){
        return view ("formations");
    }

    public function contact (){
        return view ("contact");
    }

}
