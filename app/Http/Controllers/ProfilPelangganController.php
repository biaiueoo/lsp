<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilPelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::where('id_user', '=', Auth::user()->id)->first();
        return view('profil-pelanggan.index', [
            'pelanggan' => $pelanggan
        ]);
    }
}

    