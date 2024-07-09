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
    <div style="width: 75%; margin-left: 15%;">
        <div class="bg-teal p-3">
            <h1>Arsip Surat >> Lihat</h1>
            <p>Nomor: {{ $surat->nomor_surat }}</p>
            <p>Kategori: {{ $surat->kategoriSurat->nama_kategori }}</p>
            <p>Judul: {{ $surat->judul }}</p>
            <p>Waktu Unggah: {{ $surat->created_at->format('d M Y H:i') }}</p>
        </div>

        <embed src="{{ asset('storage/' . $surat->file) }}" type="application/pdf" width="100%" height="500px" />

        <div class="mt-3">
            <a href="{{ route('arsip_surat.index') }}" class="btn btn-secondary">
                << Kembali</a>
                    <a href="{{ asset('storage/' . $surat->file) }}" class="btn btn-secondary" download>Unduh</a>
                    <a href="{{ route('arsip_surat.edit', $surat->id) }}" class="btn btn-secondary">Edit/Ganti File</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
