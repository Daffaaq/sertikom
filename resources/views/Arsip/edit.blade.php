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
                <h2>Arsip Surat >> Edit</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum is simply dummy</p>
                <form action="{{ route('arsip_surat.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{ $surat->nomor_surat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori_surat_id" required>
                            <option value="" disabled>Pilih Kategori</option>
                            @foreach ($kategoriSurats as $kategori)
                                <option value="{{ $kategori->id }}" {{ $surat->kategori_surat_id == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $surat->judul }}" required>
                    </div>
                    <div class="form-group">
                        <label for="file">File:</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <small>Masukkan file PDF jika ingin mengubah file</small>
                    </div>
                    <br>
                    <a href="{{ route('arsip_surat.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
