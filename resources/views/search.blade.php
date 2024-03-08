@extends('layouts.dash')

@section('content')
    <div class="content" style="margin-top: 1rem; margin-left: 18rem">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Koleksi Buku</h3>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-3 mt-4">
                        {{-- Modal --}}
                        <div class="modal fade" id="book-{{ $book->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $book->title }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-between">
                                        <div class="col">
                                            <img class="img-fluid mt-1" src="{{ asset('storage/posts/' . $book->image) }}"
                                                alt="Card image cap" style="width: 300px; height: auto;">
                                            <h5 class="mt-3" style="color: #aa0172">
                                                Author :
                                            </h5>
                                            <hr>
                                            <p class="fs-6">
                                                {{ $book->author }}
                                            </p>
                                            <h5 class="mt-3" style="color: #0120aa">
                                                Telah Dipinjam :
                                            </h5>
                                            <hr>
                                            <p class="fs-6">
                                                {{ $book->pinjaman->count() }} kali
                                            </p>
                                        </div>
                                        <div class="col ms-3">
                                            <h5 style="color: #aa0101">
                                                Sinopsis :
                                            </h5>
                                            <hr>
                                            <p class="fs-6">
                                                {{ $book->description }}
                                            </p>
                                            <h5 style="color: #1daa01">
                                                Genre :
                                            </h5>
                                            <hr>
                                            <p class="fs-6">
                                                {{ $book->genre }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ url('pinjam') }}">
                                            <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                                                style="background-color: #1daa01 ;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Modal --}}
                        <div class="card me-3" style="width: 200px; height: auto">
                            <div class="card-content">
                                <div class="card-body">
                                    <img class="img-fluid mt-1" src="{{ asset('storage/posts/' . $book->image) }}"
                                        alt="Card image cap" style="width: 200px; height: auto;">
                                </div>
                            </div>
                            <button class="btn btn-warning mb-3 rounded-pill mt-2" style="width: 130px; margin-left: 35px"
                                data-bs-toggle="modal" data-bs-target="#book-{{ $book->id }}">Read
                                More</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
