@extends('adminlte::page')
@section('title', 'Tambah Reservasi')
@section('content_header')
<h1 class="m-0 text-dark">Tambah Reservasi</h1>
@stop
@section('content')
<form action="{{ route('reservasi.update', $reservasi}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="nama_lengkap">Data Pelanggan</label>
                        <div class="input-group">
                        <input type="hidden" name="id_pelanggan" id="id_pelanggan " value="{{old('id_pelanggan')}}">
                        <input type="text" class="form-control @error('nama_lengkap')  is-invalid  @enderror" placeholder="Nama Pelanggan" id="nama_lengkap" name="nama_lengkap" value="{{$reservasi->nama_lengkap ??old('nama_lengkap')}}" aria-label="nama_lengkap" aria-describedby="cari" readonly>
                            <button class="btn  btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop"></i> Cari Data pelanggan</button>
                        </div>
                    </div>

                <!-- <div class="form-group">
                    <div class="input-group">
                            <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="{{old('id_pelanggan')}}">
                            <input type="text" class="form-control
@error('id') is-invalid @enderror" placeholder="Pelanggan" id="id" name="id" arialabel="id"
                                value="{{old('id')}}" aria-describedby="cari" readonly>
                            <button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
                                data-bs-target="#staticBackdrop"></i>
                                Cari Data Pelanggan</button>
                        </div> -->
                    <div class="form-group">
                        <label for="id_daftar_paket">Daftar Paket Wisata</label>
                        <div class="input-group">
                            <input type="hidden" name="id_daftar_paket" id="id_daftar_paket" value="{{$reservasi->id_daftar_paket ??old('id_daftar_paket')}}">
                            <input type="text" class="form-control @error('id_daftar_paket')  is-invalid  @enderror" placeholder="Daftar Paket Wisata" id="id_daftar_paket" name="id_daftar_paket" value="{{old('id_daftar_paket')}}" aria-label="id_daftar_paket" aria-describedby="cari" readonly>
                            <button class="btn  btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop1"></i> Cari Data Daftar Paket Wisata</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_reservasi">Tanggal Reservasi</label>
                        <input type="datetime-local" class="form-control 
@error('tanggal_reservasi') is-invalid @enderror" id="tanggal_reservasi" placeholder="Tanggal Reservasi" name="tanggal_reservasi" value="{{$reservasi=>tanggal_reservasi ??old('tanggal_reservasi')}}">
                        @error('tanggal_reservasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control 
@error('harga') is-invalid @enderror" id="harga" readonly onkeyup="hitung" placeholder="Harga" name="harga" value="{{$reservasi->harga ??old('harga')}}">
                        @error('harga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_peserta">Jumlah Peserta</label>
                        <input type="number" class="form-control 
@error('jumlah_peserta') is-invalid @enderror" id="jumlah_peserta" readonly onkeyup="hitung()" placeholder="Jumlah Peserta" name="jumlah_peserta" value="{{$reservasi->jumlah_peserta ??old('jumlah_peserta')}}">
                        @error('jumlah_peserta') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <input type="decimal" class="form-control 
@error('diskon') is-invalid @enderror" id="diskon" onkeyup="hitung()" placeholder="Diskon" name="diskon" value="{{$reservasi->diskon ??old('diskon')}}">
                        @error('diskon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nilai_diskon">Nilai Diskon</label>
                        <input type="float" class="form-control 
@error('nilai_diskon') is-invalid @enderror" id="nilai_diskon" readonly placeholder="Nilai Diskon" name="nilai_diskon" value="{{$reservasi->nilai_diskon ??old('nilai_diskon')}}">
                        @error('nilai_diskon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_bayar">Total Bayar</label>
                        <input type="number" class="form-control 
@error('total_bayar') is-invalid @enderror" id="total_bayar" readonly placeholder="Total Bayar" name="total_bayar" value="{{$reservasi->total_bayar ??old('total_bayar')}}">
                        @error('total_bayar') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="file_bukti_tf" class="formlabel">Bukti Transfer</label>
                        <img src="/img/no-image.png" class="imgthumbnail d-block" name="tampil" alt="..." width="15%" id="tampil">
                        <input class="form-control @error('file_bukti_tf') isinvalid @enderror" type="file" id="file_bukti_tf" name="file_bukti_tf">
                        @error('file_bukti_tf') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status_reservasi_wisata">Status Reservasi</label>
                        <select class="form-control @error('status_reservasi_wisata') isinvalid @enderror" id="status_reservasi_wisata" name="status_reservasi_wisata">
                            <option value="pesan" @if(old('status_reservasi_wisata')=='pesan' )selected @endif>Pesan
                            </option>
                            <option value="dibayar" @if(old('status_reservasi_wisata')=='dibayar' )selected @endif>Dibayar</option>
                            <option value="selesai" @if(old('status_reservasi_wisata')=='selesai' )selected @endif>Selesai</option>
                        </select>
                        @error('status_reservasi_wisata') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    </div>
                    <!--  Modal Pelanggan -->
                    <div class="modal fade" id="staticBackdrop" data-bsbackdrop="static" data-bs-keyboard="false" tabindex="-1" arialabelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Pelanggan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <table class="table table-hover table-bordered tablestripped" id="example2">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pelanggan</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>

                                        @foreach($pelanggan as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->nama_lengkap}}</td>
                                    <td>{{$data->no_hp}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>
                                                    <button type="button" class="btn  btn-primary btn-xs" onclick="pilih('{{$data->id}}',  '{{$data->nama_lengkap}}', '{{$data->no_hp}}', '{{$data->alamat}}')" data-bs-dismiss="modal">
                                                        Pilih
                                                    </button>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Modal  -->
                    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Daftar Wisata</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <table class="table table-hover table-bordered tablestripped" id="example3">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Paket</th>
                                                <th>Jumlah Peserta</th>
                                                <th>Harga</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($daftar_paket as $key => $dp)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td id={{$key+1}}>{{$dp->nama_daftarpaket}}</td>
                                                <td>{{$dp->jumlah_peserta}}</td>
                                                <td>{{$dp->harga}}</td>
                                                <td>
                                                    <button type="button" class="btn  btn-primary 
    btn-xs" onclick="pilih1('{{$dp->id}}',  '{{$dp->nama_daftarpaket}}', '{{$dp->jumlah_peserta}}', '{{$dp->harga}}')" data-bs-dismiss="modal">
                                                        Pilih
                                                    </button>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('reservasi.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @push('js')
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        //Fungsi pilih untuk memilih data bidang studi dan mengirimkan data Users dari Modal ke form tambah
        function pilih(id, p) {
            document.getElementById('id_pelanggan').value = id
            document.getElementById('nama_lengkap').value = p
        }
        $('#example3').DataTable({
            "responsive": true,
        });
        //Fungsi pilih untuk memilih data bidang studi dan mengirimkan data daftarpaket dari Modal ke form tambah
        function pilih1(id, dp, jp, hrg) {
            document.getElementById('id_daftar_paket').value = id
            document.getElementById('nama_daftarpaket').value = dp
            document.getElementById('jumlah_peserta').value = jp
            document.getElementById('harga').value = hrg

        }
    </script>
    <script>
        function hitung() {
            let harga = document.getElementById("harga").value
            let diskon = document.getElementById("diskon").value
            let nilai_diskon = harga * diskon / 100
            document.getElementById("nilai_diskon").value = nilai_diskon
            let total_bayar = harga - nilai_diskon
            document.getElementById("total_bayar").value = total_bayar

            //alert("qty = " + qty + " harga = " + harga)
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#tampil').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#file_bukti_tf").change(function() {
            readURL(this);
        });
    </script>
    <script>
        $(function() {
            $("#date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
    @endpush