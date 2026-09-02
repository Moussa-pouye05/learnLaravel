<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nom = "Moussa Pouye";
        $formation = "laravel";
        $objectif = "Devenue expert en laravel";
        $technologies = [];
        $age = 12;
        $connecte = false;
        return view('about',[
            'nom' => $nom,
            'formation' => $formation,
            'objectif' => $objectif,
            'technologies' => $technologies,
            'age' => $age,
            'connecte' => $connecte
        ]);
    }
}
