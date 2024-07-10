@extends('layouts.index')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New User</div>

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

                        <form action="{{ route('arsip_surat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <label for="nomor_surat">Nama Kategori:</label>
                                <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" required>
                            </div>
                            <!-- Password -->
                            <!-- Role -->
                            <div class="form-group">
                                <label for="Kategori">Kategori:</label>
                                <select class="form-control" id="kategori" name="kategori_surat_id" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($kategoriSurats as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">judul:</label>
                                <input type="text" name="judul" id="judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="file">file:</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ route('kategori_surats.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@endsection
