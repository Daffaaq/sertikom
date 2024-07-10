@extends('layouts.index')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('arsip_surat.update', $surat->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Name -->
                            <div class="form-group">
                                <label for="nomor_surat">Nama Kategori: <span class="text-danger">*</span></label>
                                <input type="text" name="nomor_surat" id="nomor_surat" class="form-control"
                                    value="{{ $surat->nomor_surat }}" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="Kategori">Kategori:</label>
                                <select class="form-control" id="kategori" name="kategori_surat_id" required>
                                    <option value="" disabled>Pilih Kategori</option>
                                    @foreach ($kategoriSurats as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ $surat->kategori_surat_id == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">judul:</label>
                                <input type="text" name="judul" id="judul" class="form-control"
                                    value="{{ $surat->judul }}" required>
                            </div>
                            <div class="form-group">
                                <label for="file">file:</label>
                                <input type="file" name="file" id="file" class="form-control">
                                <small>Masukkan file PDF jika ingin mengubah file</small>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ route('arsip_surat.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Update Arsip</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
