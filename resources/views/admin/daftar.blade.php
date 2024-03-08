@extends('layouts.admindash')

@section('content')
    <h2 class="mt-4" style="margin-left: 270px">
        Daftar Akun
    </h2>
    <div class="container mt-4" style="margin-left: 270px; width: 970px">
        <div class="row">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Akun</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pinjaman Buku</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>User 1</td>
                            <td>user1@gmail.com</td>
                            <td>Laut Bercerita</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Opsi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" >Edit</a></li>
                                        <li><a class="dropdown-item" href="#" >Hapus Akun</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
