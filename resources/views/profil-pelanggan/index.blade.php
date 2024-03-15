@extends('adminlte::page')
@section('title', 'List Pelanggan')
@section('content_header')
    <h1 class="m-0 text-dark">Profil Pelanggan</h1>
@stop
@section('content')
 <div class="row">
 <div class="col-12">
 <div class="d-flex flex-row-reverse">
 <div class="p-2">
 <a href="{{route('pelanggan.edit', $pelanggan->id)}}"
class="btn btn-primary mb-2">
 Edit Profil
 </a>
 </div>
 </div>
 <div class="card mb-3">
 <div class="row g-0">
 <div class="col-md-4">
 <img src="storage/{{$pelanggan->foto}}" alt="{{$pelanggan->foto}} tidak tampil" class="img-fluid rounded-start">
 </div>
 <div class="col-md-8">
 <div class="card-body">
 <table class="table mb-3">

<tbody>
 <tr>
 <th scope="row">Nama Pelanggan</th>
 <td>:</td>
 <td>{{$pelanggan->nama_lengkap}}</td>
 </tr>
<tr>
 <th scope="row">No Telepon</th>
 <td>:</td>
 <td>{{$pelanggan->no_hp}}</td>
 </tr>

<tr>
 <th scope="row">Alamat</th>
 <td>:</td>
 <td>{{$pelanggan->alamat}}</td>
 </tr>

 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
@stop