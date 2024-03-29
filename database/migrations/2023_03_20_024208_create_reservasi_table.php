<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_daftar_paket');
            $table->date('tanggal_reservasi');
            $table->Integer('harga_paket');
            $table->Integer('jumlah_peserta');
            $table->decimal('diskon');
            $table->float('nilai_diskon');
            $table->BigInteger('total_bayar');
            $table->string('file_bukti_tf');
            $table->enum('status_reservasi_wisata', ['pesan', 'dibayar', 'selesai']);
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_daftar_paket')->references('id')->on('daftar_paket')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
