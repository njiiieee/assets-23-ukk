@extends('layouts.dash')

@section('content')
    <div class="content">
        <div class="container">
            <div class="card" style="margin-left: 12rem; margin-top: 4rem">
                <div class="card-header">
                    <h4 class="card-title mt-2 mb-2">Form Pengembalian</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="mb-2" for="first-name-column">ID
                                            Perpustakaan</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            name="fname-column" value="ACC01">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="mb-2" for="last-name-column">Nama Lengkap</label>
                                        <input type="text" id="last-name-column" class="form-control" name="lname-column"
                                            value="Joe Mang">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="mb-2" for="city-column">Judul Buku</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect">
                                                <option>Laut Bercerita</option>
                                                <option>Blade Runner</option>
                                                <option>Thor Ragnarok</option>
                                                <option>Vampires and Onion</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="mb-2" for="country-floating">Alamat</label>
                                        <input type="text" id="country-floating" class="form-control"
                                            name="country-floating" value="Jl.amdiwoadaHIyak WEddeh">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label for="tanggal" class="form-label">Waktu Peminjaman</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label for="email-id-column">Email</label>
                                        <input type="email" id="email-id-column" class="form-control"
                                            name="email-id-column" value="joe.mang@example.net">
                                    </div>
                                </div>
                                <div class="col-12 mb-4 ms-3 d-flex justify-content-beetwen align-middle">
                                    <div style="margin-left: 50rem">
                                        <button type="reset" class="btn btn-secondary me-1 mb-1">Hapus</button>
                                        <a href="/tanda-pengembalian" type="submit"
                                            class="btn btn-success me-2 mb-1">Kembalikan</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
