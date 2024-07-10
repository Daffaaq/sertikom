@extends('layouts.index')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Arsip Surat</span>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Nomor: {{ $surat->nomor_surat }}</p>
                                <p>Kategori: {{ $surat->kategoriSurat->nama_kategori }}</p>
                                <p>Judul: {{ $surat->judul }}</p>
                                <p>Waktu Unggah: {{ $surat->created_at->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <embed src="{{ asset('storage/' . $surat->file) }}" type="application/pdf" width="100%"
                                height="500px" />
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="card-footer">
                        <a href="{{ route('arsip_surat.index') }}" class="btn btn-secondary">
                            Kembali</a>
                        <a href="{{ asset('storage/' . $surat->file) }}" class="btn btn-secondary" download>Unduh</a>
                        <a href="{{ route('arsip_surat.edit', $surat->id) }}" class="btn btn-secondary">Edit/Ganti
                            File</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
