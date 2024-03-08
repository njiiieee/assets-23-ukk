@extends('layouts.dash')

@section('content')
    <div class="content">
        <div class="container">
            <div class="card" style="margin-left: 12rem; margin-top: 4rem">
                <div class="card-header">
                    <h4 class="card-title mt-2 mb-2">Form Peminjaman</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/pinjam" class="form" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="mb-2" for="city-column">Judul Buku</label>
                                        <fieldset class="form-group">
                                            <select name="id_book" class="form-select" id="basicSelect">
                                                @foreach ($books as $book)
                                                    <option value="{{ $book->id }}">
                                                        {{ $book->title }} ({{$book->stock}})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label for="tanggal" class="form-label">Waktu Peminjaman</label>
                                        <input type="date" value="{{ now()->format('Y-m-d') }}" name="tanggal"
                                            id="tanggal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 mb-4 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success me-2 mb-1">Pinjam</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
