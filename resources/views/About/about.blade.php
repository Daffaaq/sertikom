@extends('layouts.index')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>About</span>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="\gambar\daffa.jpg" class="img-fluid" alt="About Image"
                                    style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;">
                            </div>
                            <div class="col-md-6">
                                <h4>Aplikasi ini dibuat oleh:</h4>
                                <p><strong>Nama:</strong> Daffa Aqila Rahmatullah</p>
                                <p><strong>Prodi:</strong> DIV Teknik Informatika</p>
                                <p><strong>NIM:</strong> 2041720098 </p>
                                <p><strong>Tanggal:</strong> 10 Juli 2024 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection