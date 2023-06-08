<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DilanPolresController extends Controller
{
    public function index() {
        return view('mazer_template.dilan_polres.home.home');
        
    }

    public function daftarSkck() {
        return view('mazer_template.dilan_polres.daftar_skck.create');
    }

    public function laporanProvost() {
        return view('mazer_template.dilan_polres.laporan_provost.create');
    }

    public function izinKeramaian() {
        return view('mazer_template.dilan_polres.izin_keramaian.create');
    }

    public function pengaduanMasyarakat() {
        return view('mazer_template.dilan_polres.pengaduan_masyarakat.create');
    }

    public function pengawalanBendaBerharga() {
        return view('mazer_template.dilan_polres.pengawalan_benda_berharga.create');
    }

    public function pengawalanTahanan() {
        return view('mazer_template.dilan_polres.pengawalan_tahanan.create');
    }
}