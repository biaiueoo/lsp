<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
        //menampilkan data pelanggan
    $pelanggan = Pelanggan::all();
    return view('pelanggan.index', [
        'pelanggan' => $pelanggan
    ]);
    }

    public function create(){
        //menampilkan dorm tambah pelanggan
        return view('pelanggan.create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request){
        // menyimpan data pelanggan
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'id_user' => 'required'
        ]);
        $array = $request->only([
            'nama_lengkap',
            'no_hp',
            'alamat',
            'foto',
            'id_user'
        ]);

        $array['foto'] = $request->file('foto')->store('Foto Pelanggan');
        $tambah=Pelanggan::create($array);
        if($tambah) $request->file('foto')->store('Foto Pelanggan');
        return redirect()->route('reservasi.create')->with('success_message', 'Berhasil menambah pelanggan baru');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        if (!$pelanggan) return redirect()->route('pelanggan.index') ->with('error_message', 'pelanggan dengan id = '.$id.'tidak ditemukan');
        return view('pelanggan.edit', [
            'pelanggan' => $pelanggan,
        'users' => User::all() 
    ]);
    }
    public function update(Request $request, $id){
        //Mengedit Data pelanggan
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'id_user' => 'required'
        ]);
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama_lengkap = $request->nama_lengkap;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->foto = $request->file('foto')->store('Foto Pelanggan');
        $pelanggan->id_user = $request->id_user;
        $pelanggan->save();
        return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil mengubah pelanggan');
    } 

    public function destroy(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        if ($pelanggan) {
            $hapus = $pelanggan->delete();
            if ($hapus) unlink("storage/" . $pelanggan->foto);
        }
        return redirect()->route('pelanggan.index')
->with('success_message', 'Berhasil menghapus Pelanggan');
    }


}
