<?php

namespace App\Http\Controllers;
use App\Models\reservasi;
use App\Models\Pelanggan;
use App\Models\daftar_paket;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        //menampilkan data reservasi
    $reservasi = reservasi::all();
    return view('reservasi.index', [
        'reservasi' => $reservasi
    ]);
    }

    public function create(){
        //menampilkan dorm tambah reservasi
        return view('reservasi.create', [
            'pelanggan' => Pelanggan::all(),
            'daftar_paket' => daftar_paket::all()
        ]);
    }

    public function store(Request $request){
        // menyimpan data reservasi
        $request->validate([
            'id_pelanggan' => 'required',
            'id_daftar_paket'=> 'required',
            'tanggal_reservasi'=> 'required',
            'harga_paket' => 'required',
            'jumlah_peserta' => 'required',
            'diskon' => 'required',
            'nilai_diskon' => 'required',
            'total_bayar' => 'required',
            'file_bukti_tf' => 'required',
            'status_reservasi' => 'required'
        ]);
        $array = $request->only([
            'id_pelanggan',
            'id_daftar_paket',
            'tanggal_reservasi',
            'harga_paket',
            'jumlah_peserta',
            'diskon',
            'nilai_diskon',
            'total_bayar',
            'file_bukti_tf',
            'status_reservasi'
        ]);

        $array['file_bukti_tf'] = $request->file('file_bukti_tf')->store('Foto Reservasi');
        $tambah=reservasi::create($array);
        if($tambah) $request->file('file_bukti_tf')->store('Foto Reservasi');
        return redirect()->route('reservasi.index')->with('success_message', 'Berhasil menambah reservasi baru');
    }

    public function edit($id)
    {
        $reservasi = reservasi::find($id);
        if (!$reservasi) return redirect()->route('reservasi.index') ->with('error_message', 'pelanggan dengan id = tidak ditemukan');
        return view('reservasi.edit', [
            'reservasi' => $reservasi,
        'pelanggan' => Pelanggan::all() ,
        'daftar_paket' => daftar_paket::all()
    ]);
    }
    public function update(Request $request, $id){
        //Mengedit Data reservawsi
        $request->validate([
            'id_pelanggan' => 'required',
            'id_daftar_paket'=> 'required',
            'tanggal_reservasi'=> 'required',
            'harga' => 'required',
            'jumlah_peserta' => 'required',
            'diskon' => 'required',
            'nilai_diskon' => 'required',
            'total_bayar' => 'required',
            'file_bukti_tf' => 'required',
            'status_reservasi' => 'required'
        ]);
        $reservasi = reservasi::find($id);
        $reservasi->id_pelanggan = $request->id_pelanggan;
        $reservasi->id_daftar_paket = $request->id_daftar_paket;
        $reservasi->tanggal_reservasi = $request->tanggal_reservasi;
        $reservasi->harga = $request->harga;
        $reservasi->jumlah_peserta = $request->jumlah_peserta;
        $reservasi->diskon = $request->diskon;
        $reservasi->nilai_diskon = $request->nilai_diskon;
        $reservasi->total_bayar = $request->total_bayar;
        $reservasi->file_bukti_tf = $request->file('file_bukti_tf')->store('Foto Reservasi');
        $reservasi->status_reservasi = $request->status_reservasi;
        $reservasi->save();
        return redirect()->route('reservasi.index')->with('success_message', 'Berhasil mengubah reservasi');
    } 

    public function destroy(Request $request, $id)
    {
        //menghapus data reservasi
    $reservasi = reservasi::find($id);
    
    if ($reservasi){
        $hapus=$reservasi->delete();
        if($hapus) unlink("storage/" . $reservasi->file_bukti_tf);
    }
    return redirect()->route('reservasi.index')->with('success_message', 'Berhasil menghapus reservasi !');
    }

    public function cetak()
    {
        $cetak = reservasi::all();
        return view(
            'reservasi.cetak', [
                'cetak' => $cetak
            ]);
    }
}
