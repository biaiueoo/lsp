@extends('adminlte::page')
@section('title', 'Edit pelanggan')
@section('content_header')
<h1 class="m-0 text-dark">Edit pelanggan</h1>
@stop
@section('content')
<form action="{{route('pelanggan.update', $pelanggan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control
@error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="nama_lengkap" name="nama_lengkap"
                            value="{{$pelanggan->nama_lengkap ?? old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" class="form-control
@error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No Hp" name="no_hp"
                            value="{{$pelanggan->no_hp ?? old('no_hp')}}">
                        @error('no_hp') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control
@error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" name="alamat"
                            value="{{$pelanggan->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <img src="/img/no-image.png" class="img-thumbnail d-block" name="tampil" alt="..." width="15%" id="tampil">
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
                        @error('foto') <span class="text-danger">{{$message}}</span> @enderror
                    </div> 
                    <div class="form-group">
                        <label for="email">User</label>
                        <div class="input-group">
                            <input type="hidden" name="id_user" id="id_user" value="{{$pelanggan->users->id ??
    old('id_user')}}">
                            <input type="text" class="form-control
    @error('email') is-invalid @enderror" placeholder="User" id="email" name="email"
                                value="{{$pelanggan->users->email ?? old('email')}}" aria-label="User" ariadescribedby="cari"
                                readonly>
                            <button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
                                data-bs-target="#staticBackdrop"></i>
                                Cari Data User</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('pelanggan.index')}}" class="btn
btn-default">
                    Batal
                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bsbackdrop="static" data-bs-keyboard="false" tabindex="-1"
        arialabelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data User</h1>
                    <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover table-bordered tablestripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Email</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td id={{$key+1}}>{{$user->email}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary
btn-xs" onclick="pilih('{{$user->id}}', '{{$user->email}}')" data-bs-dismiss="modal">
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

    function pilih(id, email) {
        document.getElementById('id_user').value = id
        document.getElementById('email').value = email
    }
    </script>

<script>
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
</script>
    @endpush