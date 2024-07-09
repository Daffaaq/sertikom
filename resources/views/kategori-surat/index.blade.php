<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Page Content -->
    <div style="width: 75%;">
        <div class="bg-teal p-3">
            <h1>Kategori Surat</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.</p>
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3" style="max-width: 700px;">
                        <form action="{{ route('kategori_surats.index') }}" method="GET" class="d-flex w-100">
                            <span class="input-group-text">Cari Kategori</span>
                            <input type="text" name="search" class="form-control rounded-start"
                                placeholder="Search..." aria-label="Search" aria-describedby="search-button"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary rounded-end" type="submit" id="search-button">Cari</button>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriSurats as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a href="{{ route('kategori_surats.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                                        data-id="{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('kategori_surats.create') }}" class="btn btn-success btn-block"
                        style="width: 250px;">[
                        <i class="fas fa-plus"></i> ] Tambahkan kategori baru
                    </a>
                    {{ $kategoriSurats->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Kategori Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda ingin hapus kategori surat ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var action = '{{ route('kategori_surats.destroy', ':id') }}';
            action = action.replace(':id', id);
            $('#deleteForm').attr('action', action);
        });

        $('#deleteForm').on('submit', function(event) {
            event.preventDefault();
            var form = $(this);
            var action = form.attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    if (response.success) {
                        $('#deleteModal').modal('hide');
                        location.reload(); // Reload the page to reflect the changes
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr) {
                    alert('An error occurred while deleting the Kategori Surat.');
                }
            });
        });
    </script>
</body>

</html>
