<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')


    <!-- Page Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Kategori Surat >> Unggah</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <form action="{{ route('kategori_surats.update', ['kategori_surat' => $kategoriSurat->id]) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                            value="{{ $kategoriSurat->nama_kategori }}" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Judul</label>
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan" required>{{ $kategoriSurat->keterangan }}</textarea>
                    </div>
                    <br>
                    <a href="{{ route('kategori_surats.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>


            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
```
