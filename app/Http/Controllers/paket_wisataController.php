<?php

namespace App\Http\Controllers;
use App\Models\paket_wisata;
use Illuminate\Http\Request;

class paket_wisataController extends Controller
{
    //menampilkan data table paket wisata
    public function index(){
        return view('paket_wisata.index', ['paket_wisata' => paket_wisata::all()]);
    }

    public function create(){
        return view('paket_wisata.create');
    }

    public function store(Request $request){
        //menyimpan data paket wisata
        $request->validate([
        'nama_paket' => 'required',
        'deskripsi' => 'required',
        'fasilitas' => 'required',
        'itinerary' => 'required',
        'diskon' => 'required',
        'foto1' => 'required|image|file',
        'foto2' => 'required|image|file',
        'foto3' => 'required|image|file',
        'foto4' => 'required|image|file',
        'foto5' => 'required|image|file'
        ]);
        $array = $request->only([
        'nama_paket',
        'deskripsi',
        'fasilitas',
        'itinerary',
        'diskon',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5'
        ]);

        $array['foto1'] = $request->file('foto1')->store('Foto Wisata');
        $array['foto2'] = $request->file('foto2')->store('Foto Wisata');
        $array['foto3'] = $request->file('foto3')->store('Foto Wisata');
        $array['foto4'] = $request->file('foto4')->store('Foto Wisata');
        $array['foto5'] = $request->file('foto5')->store('Foto Wisata');

        $tambah = paket_wisata::create($array);
            if ($tambah) $request->file('foto1')->store('Foto Wisata');
            if ($tambah) $request->file('foto2')->store('Foto Wisata');
            if ($tambah) $request->file('foto3')->store('Foto Wisata');
            if ($tambah) $request->file('foto4')->store('Foto Wisata');
            if ($tambah) $request->file('foto5')->store('Foto Wisata');

        return redirect()->route('paket_wisata.index')->with('success_message', 'Berhasil menambah paket wisata baru');
    }

    public function edit($id){
        // menampilkan form edit paket wisata
        $paket_wisata = paket_wisata::find($id);
            if (!$paket_wisata) return redirect()->route('paket_wisata.index')->with('error_message', 'Paket Wisata dengan id = ' .$id. 'tidak ditemukan');
            return view('paket_wisata.edit', ['paket_wisata' => $paket_wisata]);
    }

    public function update(Request $request, $id){
        // meng update data yang sudah di edit
        $request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'itinerary' => 'required',
            'diskon' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
            'foto4' => 'required',
            'foto5' => 'required'
        ]);

        $paket_wisata = paket_wisata::find($id);
            $paket_wisata->nama_paket=$request->nama_paket;
            $paket_wisata->deskripsi=$request->deskripsi;
            $paket_wisata->fasilitas=$request->fasilitas;
            $paket_wisata->itinerary=$request->itinerary;
            $paket_wisata->diskon=$request->diskon;
            $paket_wisata->foto1=$request->file('foto1')->store('Foto Wisata');
            $paket_wisata->foto1=$request->file('foto2')->store('Foto Wisata');
            $paket_wisata->foto1=$request->file('foto3')->store('Foto Wisata');
            $paket_wisata->foto1=$request->file('foto4')->store('Foto Wisata');
            $paket_wisata->foto1=$request->file('foto5')->store('Foto Wisata');
            $paket_wisata->save();
            return redirect()->route('paket_wisata.index')->with('success_message', 'Berhasil mengubah paket wisata');
    }

    public function destroy(Request $request, $id){
        // menghapus data paket wisata
        $paket_wisata = paket_wisata::find($id);
            if($paket_wisata){
                $hapus = $paket_wisata->delete();
                if($hapus) unlink("storage/" . $paket_wisata->foto1);
                if($hapus) unlink("storage/" . $paket_wisata->foto2);
                if($hapus) unlink("storage/" . $paket_wisata->foto3);
                if($hapus) unlink("storage/" . $paket_wisata->foto4);
                if($hapus) unlink("storage/" . $paket_wisata->foto5);

            return redirect()->route('paket_wisata.index')->with('success_message', 'Berhasil menghapus Paket Wisata');
            }
    }

    public function show(string $id){
        $paket_wisata = paket_wisata::findOrFail($id);
        return view(['paket_wisata']);
    }
}
