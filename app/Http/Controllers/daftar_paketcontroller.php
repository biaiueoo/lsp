<?php

namespace App\Http\Controllers;
// use App\Controller\View;
use App\Models\daftar_paket;
use App\Models\paket_wisata;
use Illuminate\Http\Request;

class daftar_paketcontroller extends Controller
{
    //menampilkan data di table daftar paket
    public function index()
    {
        $daftar_paket = daftar_paket::all();
        return view('daftar_paket.index', [
            'daftar_paket' => $daftar_paket
        ]);
    }

    public function create(){
        //menampilkan form tambah daftar
        return view('daftar_paket.create', [
            'paket_wisata' => paket_wisata::all()
        ]);
    }

    public function store(Request $request){
        //menyimpan data yang sudash ditambahkan ke daftar paket
        $request ->validate([
            'nama_daftarpaket' => 'required',
            'id_paket_wisata' => 'required',
            'jumlah_peserta' => 'required',
            'harga_paket' => 'required'
        ]);
        $array = $request->only([
            'nama_daftarpaket',
            'id_paket_wisata',
            'jumlah_peserta',
            'harga_paket'
        ]);

        daftar_paket::create($array);
        return redirect()->route('daftar_paket.index')->with('success_message', 'Berhasil menambah  data daftar paket');
    }

    public function edit($id)
    {
        $daftar_paket = daftar_paket::find($id);
        if (!$daftar_paket) return redirect()->route('daftar_paket.index') ->with('error_message', 'pelanggan dengan id = '.$id.'tidak ditemukan');
        return view('daftar_paket.edit', [
            'daftar_paket' => $daftar_paket,
        'paket_wisata' => paket_wisata::all() 
    ]);
    }
    public function update(Request $request, $id){
        //Mengedit Data pelanggan
        $request ->validate([
            'nama_daftarpaket' => 'required',
            'id_paket_wisata' => 'required',
            'jumlah_peserta' => 'required',
            'harga_paket' => 'required'
        ]);
        $daftar_paket = daftar_paket::find($id);
        $daftar_paket->nama_daftarpaket = $request->nama_daftarpaket;
        $daftar_paket->id_paket_wisata = $request->id_paket_wisata;
        $daftar_paket->jumlah_peserta = $request->jumlah_peserta;
        $daftar_paket->harga_paket = $request->harga_paket;
        $daftar_paket->save();
        return redirect()->route('daftar_paket.index')->with('success_message', 'Berhasil mengubah pelanggan');
    } 


    public function destroy(Request $request, $id)
    {
        //Menghapus Karyawan
        $daftar_paket = daftar_paket::find($id);
        if ($daftar_paket) $daftar_paket->delete();
        return redirect()->route('daftar_paket.index')->with('success_message', 'Berhasil menghapus daftar paket ');
    }

    public function show(string $data) {
        $daftar_paket = daftar_paket::findOrFail($data);
        return view(['daftar_paket']);
    }
}
