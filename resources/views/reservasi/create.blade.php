@extends('adminlte::page')
@section('title', 'Tambah Reservasi')
@section('content_header')
<h1 class="m-0 text-dark">Tambah Reservasi</h1>
@stop
@section('content')
<form action="{{ route('reservasi.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="nama_lengkap">Data Pelanggan</label>
                        <!-- <div class="input-group"> -->
                        <input type="text" name="id_pelanggan" id="id_pelanggan" value="{{Auth::user()->id}}">
                        <!-- <input type="text" class="form-control @error('nama_lengkap')  is-invalid  @enderror" placeholder="Nama Pelanggan" id="nama_lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}" aria-label="nama_lengkap" aria-describedby="cari" readonly>
                            <button class="btn  btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop"></i> Cari Data pelanggan</button>
                        </div> -->
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
                            <input type="hidden" name="id_daftar_paket" id="id_daftar_paket" value="{{old('id_daftar_paket')}}">
                            <input type="text" class="form-control @error('nama_daftarpaket')  is-invalid  @enderror" placeholder="Daftar Paket Wisata" id="nama_daftarpaket" name="nama_daftarpaket" value="{{old('nama_daftarpaket')}}" aria-label="nama_daftarpaket" aria-describedby="cari" readonly>
                            <button class="btn  btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop1"></i> Cari Data Daftar Paket Wisata</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_reservasi">Tanggal Reservasi</label>
                        <input type="datetime-local" class="form-control 
@error('tanggal_reservasi') is-invalid @enderror" id="tanggal_reservasi" placeholder="Tanggal Reservasi" name="tanggal_reservasi" value="{{old('tanggal_reservasi')}}">
                        @error('tanggal_reservasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_paket">Harga</label>
                        <input type="number" class="form-control 
@error('harga_paket') is-invalid @enderror" id="harga_paket" readonly onkeyup="hitung()" placeholder="Harga" name="harga_paket" value="{{old('harga_paket')}}">
                        @error('harga_paket') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_peserta">Jumlah Peserta</label>
                        <input type="number" class="form-control 
@error('jumlah_peserta') is-invalid @enderror" id="jumlah_peserta" readonly onkeyup="hitung()" placeholder="Jumlah Peserta" name="jumlah_peserta" value="{{old('jumlah_peserta')}}">
                        @error('jumlah_peserta') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <input type="decimal" class="form-control 
@error('diskon') is-invalid @enderror" id="diskon" readonly onkeyup="hitung()" placeholder="Diskon" name="diskon" value="{{old('diskon')}}">
                        @error('diskon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nilai_diskon">Nilai Diskon</label>
                        <input type="float" class="form-control 
@error('nilai_diskon') is-invalid @enderror" id="nilai_diskon" readonly placeholder="Nilai Diskon" name="nilai_diskon" value="{{old('nilai_diskon')}}">
                        @error('nilai_diskon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_bayar">Total Bayar</label>
                        <input type="number" class="form-control 
@error('total_bayar') is-invalid @enderror" id="total_bayar" readonly placeholder="Total Bayar" name="total_bayar" value="{{old('total_bayar')}}">
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
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        @foreach($pelanggan as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->nama_lengkap}}</td>
                                    <td>
                                        <button type="button" class="btn  btn-primary btn-xs" onclick="pilih('{{$data->id}}',  '{{$data->nama_lengkap}}')" data-bs-dismiss="modal">
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

                    <!--  Modal Daftar Paket -->
                    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel1">Pencarian Data Daftar Wisata</h1>
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
                                                <td>{{$dp->harga_paket}}</td>
                                                
                                                <td>
                                                    <button type="button" class="btn  btn-primary 
    btn-xs" onclick="pilih1('{{$dp->id}}',  '{{$dp->nama_daftarpaket}}', '{{$dp->jumlah_peserta}}', '{{$dp->harga_paket}}', '{{$dp->paket_wisata->diskon}}')" data-bs-dismiss="modal">
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
        
        function pilih(id, p) {
            document.getElementById('id_pelanggan').value = id
            document.getElementById('nama_lengkap').value = p
        }
        
        function pilih1(id, dp, jp, hrg, disk) {
            document.getElementById('id_daftar_paket').value = id
            document.getElementById('nama_daftarpaket').value = dp
            document.getElementById('jumlah_peserta').value = jp
            document.getElementById('harga_paket').value = hrg
            document.getElementById('diskon').value = disk
            let nilai_diskon = hrg * disk / 100
            document.getElementById("nilai_diskon").value = nilai_diskon
            let total_bayar = hrg - nilai_diskon
            document.getElementById("total_bayar").value = total_bayar

        }
    
        // function hitung() {
        //     let harga_paket = document.getElementById("harga_paket").value
        //     let diskon = document.getElementById("diskon").value
        //     let nilai_diskon = harga_paket * diskon / 100
        //     document.getElementById("nilai_diskon").value = nilai_diskon
        //     let total_bayar = harga_paket - nilai_diskon
        //     document.getElementById("total_bayar").value = total_bayar

        //     //alert("qty = " + qty + " harga = " + harga)
        // }
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
    
    @endpush