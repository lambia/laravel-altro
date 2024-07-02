<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $dati = config("data");
        return view('home', $dati);
    }

    // public function metodo() {
    //     $dati = config("nomeFileDaConfig");
    //     return view('nomeFileDellaVista', $dati);
    // }
}
