<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_paket extends Model
{
    use HasFactory;
    protected $table = 'daftar_paket';
    protected $fillable = [
        'nama_daftarpaket',
        'id_paket_wisata',
        'jumlah_peserta',
        'harga_paket'
    ];

    public function paket_wisata()
    {
        return $this->belongsTo(paket_wisata::class, 'id_paket_wisata', 'id');
    }
}
