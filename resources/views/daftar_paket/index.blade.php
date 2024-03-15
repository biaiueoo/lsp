@extends('adminlte::page') 
@section('title', 'List Daftar Paket') 
@section('content_header') 
    <h1 class="m-0 text-dark">List Daftar Paket</h1>
@stop
@section('content') 
    <div class="row">
        <div class="col-12">
            <div class="card overflow-scroll">
                <div class="card-body pe-3">
                    <div class=table-responsive>
                        <a href="{{route('daftar_paket.create')}}" class="btn btn-primary mb-2">
                            Tambah
                        </a>
                        <table class="table table-hover table-bordered table-stripped" id="example2">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Paket</th>
                                    <th>Id Paket Wisata</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Harga Paket</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($daftar_paket as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td id="{{$key+1}}">{{$data->nama_daftarpaket}}</td>
                                    <td id="{{$key+1}}">{{$data->paket_wisata->nama_paket}}</td>
                                    <td>{{$data->jumlah_peserta}}</td>
                                    <td>{{$data->harga_paket}}</td>
                                    <td>
                                        <a href="{{route('daftar_paket.edit', $data)}}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <a href="{{route('daftar_paket.destroy', $data)}}" onclick="notificationBeforeDelete(event, this, <?php echo $key + 1; ?>)" class="btn btn-danger btn-xs">
                                            Delete
                                        </a>
                                    </td>
                                </tr> 
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js') 
    <form action="" id="delete-form" method="post">
        @method('delete') 
        @csrf
    </form>
    <script> 
        $('#example2').DataTable({
            "responsive": true, 
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data daftar Paket  ?')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        } 
    } 
    </script> 
@endpush