@extends('layouts.index')
@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Arsip Surat Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('arsip_surat.index') }}" method="GET" class="mb-3">
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
                                <td>
                                    @if ($item->created_at == $item->updated_at)
                                        {{ $item->created_at }}
                                    @else
                                        {{ $item->updated_at }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('arsip_surat.show', $item->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ asset('storage/' . $item->file) }}" class="btn btn-warning btn-sm"
                                        download>Unduh</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                                        data-id="{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('arsip_surat.create') }}" class="btn btn-success btn-block" style="width: 250px;">[
                    <i class="fas fa-plus"></i> ] Tambahkan kategori baru
                </a>
                </a>
                {{ $surats->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
