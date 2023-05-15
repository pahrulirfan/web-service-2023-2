<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Biaya </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="alert alert-primary text-center text-lg mb-3">Data Biaya</div>

        @if ($message = Session::get('pesan'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <a href="{{ route('biaya.create') }}" class="btn btn-success float-end mb-3">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Biaya</th>
                    <th>Tgl Transaksi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_konsumen }}</td>
                    <td>{{ $row->email_konsumen }}</td>
                    <td>{{ number_format($row->jumlah_biaya) }}</td>
                    <td>{{ $row->tanggal_transaksi }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>
                        <a href="{{ route('biaya.delete', $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')">Delete</a>
                        <a href="{{ route('biaya.edit', $row->id)}}" class="btn btn-warning btn-sm" >Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
