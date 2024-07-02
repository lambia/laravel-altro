<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class PageController extends Controller
{
    public function home() {

        $studenti = Student::all();

        $dati = [
            "studenti" => $studenti 
        ];

        return view('home', $dati);
    }

    // public function metodo() {
    //     $dati = config("nomeFileDaConfig");
    //     return view('nomeFileDellaVista', $dati);
    // }
}
