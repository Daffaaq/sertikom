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

                        <form action="{{ route('kategori_surats.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <label for="id">id</label>
                                <input type="text" name="id" id="id" class="form-control"
                                    value="{{ $nextId }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori:</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <input type="keterangan" name="keterangan" id="keterangan" class="form-control" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ route('kategori_surats.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Create User</button>
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
