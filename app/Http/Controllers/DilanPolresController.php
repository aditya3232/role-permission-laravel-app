<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DilanPolresController extends Controller
{
    public function index() {
        return view('mazer_template.dilan_polres.home.home');
        
    }

    public function laporanProvost() {
        return view('mazer_template.dilan_polres.laporan_provost.create');
    }
}