@extends('layouts.index')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kategori Surat Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('kategori_surats.index') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" name="search"
                            placeholder="Cari Kategori Surat..." value="{{ request()->get('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriSurats as $item)
                            <tr>
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
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('kategori_surats.create') }}" class="btn btn-success btn-block" style="width: 250px;">[
                    <i class="fas fa-plus"></i> ] Tambahkan kategori baru
                </a>
                </a>
                {{ $kategoriSurats->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
