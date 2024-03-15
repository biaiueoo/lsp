<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-toke" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cetak Data Reservasi</title>

</head>

<body>
    <div class="container text-center form-group">
        <p class="text-center"><b>CETAK DATA RESERVASI</b></p>
        <table class="table border table-bordered
    table-stripped" id="example2">
            <thead>
                <tr class="border border-black">
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
                </tr>
            </thead>
            <tbody class="border border-black">

                @foreach($cetak as $key => $data)
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
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script type="text/javascript">
        window.print();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>