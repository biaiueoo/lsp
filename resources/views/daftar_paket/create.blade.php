@extends('adminlte::page') 
@section('title', 'Tambah Daftar Paket') 
@section('content_header') 
    <h1 class="m-0 text-dark">Tambah Daftar Paket</h1>
@stop
@section('content') 
    <form action="{{route('daftar_paket.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_daftarpaket">Nama Paket</label>
                        <input type="text" class="form-control 
@error('nama_daftarpaket') is-invalid @enderror" id="nama_daftarpaket"
placeholder="Nama Paket" name="nama_daftarpaket" value="{{old('nama_daftarpaket')}}">
                        @error('nama_daftarpaket') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                    <label for="nama_paket">Nama Paket Wisata</label>
                        <div class="input-group">
                            <input type="hidden" name="id_paket_wisata" id="id_paket_wisata" value="{{old('id_paket_wisata')}}">
                            <input type="text" class="form-control @error('paket_wisata') is-invalid @enderror" placeholder="Paket Wisata" id="paket_wisata" name="paket_wisata" arialabel="Paket Wisata"
                                value="{{old('paket_wisata')}}" aria-describedby="cari" readonly>
                                <button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
                                data-bs-target="#staticBackdrop"></i>
                                Cari Paket Wisata</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_peserta">Jumlah Peserta</label>
                        <input type="number" class="form-control 
@error('jumlah_peserta') is-invalid @enderror" id="jumlah_peserta" placeholder="Jumlah Peserta" name="jumlah_peserta" value="{{old('jumlah_peserta')}}">
                        @error('jumlah_peserta') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_paket">Harga Paket</label>
                        <input type="number" class="form-control 
@error('harga_paket') is-invalid @enderror" id="harga_paket" placeholder="Harga Paket" name="harga_paket" value="{{old('jumlah_peserta')}}">
                        @error('harga_paket') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pelanggan.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Paket Wisata</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover table-bordered tablestripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Paket Wisata</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paket_wisata as $key => $paket_wisata)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td id={{$key+1}}>{{$paket_wisata->nama_paket}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary
btn-xs" onclick="pilih('{{$paket_wisata->id}}', '{{$paket_wisata->nama_paket}}')" data-bs-dismiss="modal">
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
    <!-- End Modal -->
    @stop
    @push('js')
    <script>
    $('#example2').DataTable({
        "responsive": true,
    });
    //Fungsi pilih untuk memilih data Kategori wisata dan mengirimkan data kategori wisata dari Modal ke form tambah

    function pilih(id, paket_wisata) {
        document.getElementById('id_paket_wisata').value = id
        document.getElementById('paket_wisata').value = paket_wisata
    }
    </script>
 
<!-- <script>
    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#tampil').attr('src', e.target.result);
            } 
            reader.readAsDataURL(input.files[0]);
        } 
    } 
    $("#foto").change(function(){
        readURL(this);
    });
</script> -->
@endpush