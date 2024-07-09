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
    <div style="width: 75%;">
        <div class="bg-teal p-3">
            <h1>Arsip Surat</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.</p>
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3" style="max-width: 700px;">
                        <span class="input-group-text">Cari Kategori</span>
                        <input type="text" class="form-control rounded-start" placeholder="Search..."
                            aria-label="Search" aria-describedby="search-button">
                        <button class="btn btn-primary rounded-end" type="button" id="search-button">Cari</button>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nomor Surat</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Waktu Pengarsipan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surats as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_surat }}</td>
                                <td>{{ $item->kategoriSurat->nama_kategori }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('arsip_surat.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('arsip_surat.show', $item->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                                        data-id="{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table><br>
                <a href="{{ route('arsip_surat.create') }}" class="btn btn-success btn-block"
                    style="width: 400px;">Arsipkan Surat</a>
            </div>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
