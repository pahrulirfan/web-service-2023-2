<!doctype html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="alert alert-success">Edit Data Biaya</div>
    <div class="row">
        <div class="col-5">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Cek input anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('biaya.update', $data->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Konsumen</label>
                    <input type="text" class="form-control form-control-sm" name="nama_konsumen" id=""
                           aria-describedby="helpId" placeholder="" value="{{ $data->nama_konsumen }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email Konsumen</label>
                    <input type="text" class="form-control form-control-sm" name="email_konsumen" id=""
                           aria-describedby="helpId" placeholder="" value="{{ $data->email_konsumen }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah Biaya</label>
                    <input type="number" class="form-control form-control-sm" name="jumlah_biaya" id=""
                           aria-describedby="helpId" placeholder="" value="{{ $data->jumlah_biaya }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Transaksi</label>
                    <input type="date" class="form-control form-control-sm" name="tanggal_transaksi" id=""
                           aria-describedby="helpId" placeholder="" value="{{ $data->tanggal_transaksi }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Keterangan</label>
                    <input type="text" class="form-control form-control-sm" name="keterangan" id=""
                           aria-describedby="helpId" placeholder="" value="{{ $data->keterangan }}">
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-primary">
                <a href="{{ route('biaya.index') }}" class="btn btn-warning">Kembali</a>
            </form>

        </div>
    </div>
</div>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
