@extends('layouts.admindash')

@section('content')
    <div class="container mt-4" style="margin-left: 270px; width: 970px">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="mt-2">
                            Daftar Buku
                        </h2>
                        <div class="mt-2" style="margin-left: 37rem">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Buku
                            </button>
                        </div>
                    </div>  
                    <hr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/koleksi-buku" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Gambar Buku</label>
                                            <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                        <div class="mb-3">
                                            <label for="author" class="form-label">Author</label>
                                            <input type="text" class="form-control" id="author" name="author"
                                                value="{{ old('author') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="genre" class="form-label">Genre</label>
                                            <input type="text" class="form-control" id="author" name="genre"
                                                value="{{ old('genre') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Sinopsis</label>
                                            <input type="text" class="form-control" id="description" name="description"
                                                value="{{ old('description') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="year" class="form-label">Tahun Rilis</label>
                                            <input type="number" class="form-control" name="year" id="year"
                                                value="{{ old('year') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="year" class="form-label">Stock Buku</label>
                                            <input type="number" class="form-control" name="stock" id="stock"
                                                value="{{ old('stock') }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Tambahkan Data</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="align-middle text-center" scope="col">No</th>
                                <th class="align-middle text-center" scope="col">Gambar Buku</th>
                                <th class="align-middle text-center" scope="col">Judul</th>
                                <th class="align-middle text-center" scope="col">Author</th>
                                <th class="align-middle text-center" scope="col">Tahun Rilis</th>
                                <th class="align-middle text-center" scope="col">Stock Buku</th>
                                <th class="align-middle text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($books->count() > 0)
                                @foreach ($books as $book)
                                    <!-- Modal Edit -->
                                    <form action="/koleksi-buku/{{ $book->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal fade" id="edit-{{ $book->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Buku
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/koleksi-buku" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Judul</label>
                                                                <input type="text" class="form-control" id="title"
                                                                    name="title"
                                                                    value="{{ old('title', $book->title) }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Gambar
                                                                    Buku</label>
                                                                <input class="form-control" type="file" id="formFile"
                                                                    name="image">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="author" class="form-label">Author</label>
                                                                <input type="text" class="form-control" id="author"
                                                                    name="author"
                                                                    value="{{ old('author', $book->author) }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="genre" class="form-label">Genre</label>
                                                                <input type="text" class="form-control" id="author"
                                                                    name="genre"
                                                                    value="{{ old('genre', $book->genre) }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="description"
                                                                    class="form-label">Sinopsis</label>
                                                                <input type="text" class="form-control"
                                                                    id="description" name="description"
                                                                    value="{{ old('description', $book->description) }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="year" class="form-label">Tahun
                                                                    Rilis</label>
                                                                <input type="number" class="form-control" name="year"
                                                                    id="year"
                                                                    value="{{ old('year', $book->year) }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="year" class="form-label">Stock
                                                                    Buku</label>
                                                                <input type="number" class="form-control" name="stock"
                                                                    id="stock"
                                                                    value="{{ old('stock', $book->stock) }}">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Edit Data</button>
                                                    </div>
                                    </form>
                </div>
            </div>
        </div>
        </form>
        <tr>
            <th class="align-middle text-center" scope="row">{{ $loop->iteration }}</th>
            <td class="align-middle text-center">
                <img src="{{ asset('storage/posts/' . $book->image) }}" style="width: 5rem">
            </td>
            <td class="align-middle text-center">{{ $book->title }}</td>
            <td class="align-middle text-center">{{ $book->author }}</td>
            <td class="align-middle text-center">{{ $book->year }}</td>
            <td class="align-middle text-center">{{ $book->stock }}</td>
            <td class="align-middle text-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Opsi
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#edit-{{ $book->id }}">Detail
                                Buku</a></li>
                        <li>
                            <form action="/koleksi-buku/{{ $book->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit">Hapus Buku</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    @else
        <tr>
            <td class="text-center" colspan="7">
                Buku Belum Tersedia
            </td>
        </tr>
        @endif
        </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
@endsection
