@extends('adminlte::page') 
@section('title', 'List Reservasi') 
@section('content_header') 
    <h1 class="m-0 text-dark">List Reservasi</h1>
@stop
@section('content') 
    <div class="row">
        <div class="col-12">
            <div class="card overflow-scroll">
                <div class="card-body pe-3">
                    <div class=table-responsive>
                        <a href="{{route('reservasi.create')}}" class="btn btn-info mb-2">
                            Tambah
                        </a>
                        <table class="table table-hover table-bordered table-stripped" id="example2">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Paket Wisata</th>
                                    <th>Tanggal Reservasi</th>
                                    <th>Harga</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Diskon</th>
                                    <th>Nilai Diskon</th>
                                    <th>Total Bayar</th>
                                    <th>File Bukti Transfer</th>
                                    <th>Status Reservasi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($reservasi as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td id="{{$key+1}}">{{$data->fpelanggan->nama_lengkap}}</td>
                                    <td id="{{$key+1}}">{{$data->fdaftarpaket->nama_daftarpaket}}</td>
                                    <td>{{$data->tanggal_reservasi}}</td>
                                    <td id="{{$key+1}}">{{$data->fdaftarpaket->harga_paket}}</td>
                                    <td>{{$data->jumlah_peserta}}</td>
                                    <td>{{$data->diskon}}</td>
                                    <td>{{$data->nilai_diskon}}</td>
                                    <td>{{$data->total_bayar}}</td>
                                    <td>
                                        <img src="storage/{{$data->file_bukti_tf}}" alt="{{$data->file_bukti_tf}} tidak tampil" class="img-thumbnail">
                                    </td>
                                    <td>{{$data->status_reservasi_wisata}}</td>
                                    <td>
                                        <a href="{{route('reservasi.edit', $data)}}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <a href="{{route('reservasi.destroy', $data)}}" onclick="notificationBeforeDelete(event, this, <?php echo $key+1; ?>)" class="btn btn-danger btn-xs">
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
        function notificationBeforeDelete(event, el, dt) {event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data Pelanggan \"'+ document.getElementById(dt).innerHTML + '\" ?')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        } 
    } 
    </script> 
@endpush