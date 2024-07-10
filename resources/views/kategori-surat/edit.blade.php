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
                        <form action="{{ route('kategori_surats.update', ['kategori_surat' => $kategoriSurat->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Name -->
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori: <span class="text-danger">*</span></label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                                    value="{{ $kategoriSurat->nama_kategori }}" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="keterangan">keterangan: <span class="text-danger">*</span></label>
                                <input type="keterangan" name="keterangan" id="keterangan" class="form-control"
                                    value="{{ $kategoriSurat->keterangan }}" required>
                            </div>


                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ route('kategori_surats.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
