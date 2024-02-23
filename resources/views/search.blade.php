@extends('layouts.dash')

@section('content')
    {{-- Modal --}}
    <div class="modal fade" id="laut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Laut Bercerita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/laut.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang
                            kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang
                            gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam
                            anaknya, dan tentang cinta yang tak akan luntur.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ardently" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Most Ardently</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/ardently.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            A trans boy searches for a future and a romance in which he can live and love openly as
                            himself in this heartrending young-adult reimagining of Jane Austen's Pride and Prejudice,
                            part of the Remixed Classics series.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tcks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Two Can Keep a Secret</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/tcks.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            Echo Ridge is small-town America. Ellery's never been there, but she's heard all about it.
                            Her aunt went missing there at age seventeen. And only five years ago, a homecoming queen
                            put the town on the map when she was killed. Now Ellery has to move there to live with a
                            grandmother she barely knows.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tbo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">The bad ones</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/tbo.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            In the course of a single winter’s night, four people vanish without a trace across a small
                            town.

                            Nora’s estranged best friend, Becca, is one of the lost. As Nora tries to untangle the truth
                            of Becca’s disappearance, she discovers a darkness in her town’s past, as well as a string
                            of coded messages Becca left for her to unravel.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="apv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">A Place for Vanishing</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/apv.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            A teen girl and her family return to her mother's childhood home, only to discover that the
                            house's strange beauty may disguise a sinister past, in this contemporary gothic horror from
                            the author of What We Harvest.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="aeim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">An Education in Malice
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/aeim.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            Sumptuous and addictive, An Education in Malice is a dark academia tale of blood, secrets
                            and insatiable hungers from Sunday Times bestselling author S.T. Gibson, author of the cult
                            hit A Dowry of Blood.
                            Deep in the forgotten hills of Massachusetts stands Saint Perpetua's College. Isolated and
                            ancient, it is not a place for timid girls.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="adark" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">A Dark and Drowning Tide
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <div class="col">
                        <img class="img-fluid mt-1" src="{{ asset('img/adark.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                    <div class="col ms-3">
                        <p class="fs-6">
                            Sumptuous and addictive, An Education in Malice is a dark academia tale of blood, secrets
                            and insatiable hungers from Sunday Times bestselling author S.T. Gibson, author of the cult
                            hit A Dowry of Blood.
                            Deep in the forgotten hills of Massachusetts stands Saint Perpetua's College. Isolated and
                            ancient, it is not a place for timid girls.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('pinjam') }}">
                        <input class="btn px-4 text-light" type="submit" value="Pinjam Buku"
                            style="background-color: #54d300 ;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="content" style="margin-top: 1rem; margin-left: 13rem">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last" style="margin-left: 110px">
                <h3>Koleksi Buku</h3>
            </div>
        </div>
        <div class="container d-flex mt-4">
            <div class="card" style="width: 300px; height: auto">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/laut.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill mt-2" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#laut">Read
                    More</button>
            </div>
            <div class="card ms-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/ardently.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#ardently">Read
                    More</button>
            </div>
            <div class="card ms-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/tcks.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#tcks">Read
                    More</button>
            </div>
            <div class="card ms-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/apv.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#apv">Read
                    More</button>
            </div>
        </div>
        <div class="container d-flex mt-5">
            <div class="card mb-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/tbo.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#tbo">Read
                    More</button>
            </div>
            <div class="card ms-5 mb-5" style="width: 300px; height: auto">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/aeim.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#aeim">Read
                    More</button>
            </div>
            <div class="card ms-5 mb-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/apv.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#apv">Read
                    More</button>
            </div>
            <div class="card ms-5 mb-5" style="width: 300px; height: auto;">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid mt-1" src="{{ asset('img/tcks.jpg') }}" alt="Card image cap"
                            style="width: 300px; height: auto;">
                    </div>
                </div>
                <button class="btn btn-warning mb-3 rounded-pill" style="width: 130px; margin-left: 82px"
                    data-bs-toggle="modal" data-bs-target="#tcks">Read
                    More</button>
            </div>
        </div>
    </div>
@endsection
