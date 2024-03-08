@extends('layouts.admindash')

@section('content')
    <h2 class="mt-4" style="margin-left: 270px">
        Daftar Pinjaman Buku
    </h2>
    <div class="container mt-4" style="margin-left: 270px; width: 970px">
        <div class="row">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pinjaman Buku</th>
                            <th scope="col">Tanggal Peminjaman</th>
                            <th scope="col">Status Pinjaman</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->user->email}}</td>
                            <td>{{$item->book?->title}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>
                                @if ($item->status == "Y")
                                Dikembalikan
                                @elseif ($item->status == "N")
                                Dipinjam
                                @endif
                            </td>
                            <td>
                                @if ($item->status == "N")
                                <form action="/koleksi-buku/kembalikan/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-secondary" type="submit">Kembalikan Buku</button>
                                </form>
                                @elseif ($item->status == "Y")
                                    -
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
