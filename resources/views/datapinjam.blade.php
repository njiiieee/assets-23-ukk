@extends('layouts.dash')

@section('content')
    <h2 class="mt-4" style="margin-left: 270px">
        Buku Pinjamanmu
    </h2>
    <div class="container mt-4" style="margin-left: 270px; width: 970px">
        <div class="row">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="align-middle text-center" scope="col">No</th>
                            <th class="align-middle text-center" scope="col">Judul Buku</th>
                            <th class="align-middle text-center" scope="col">Tanggal Peminjaman</th>
                            <th class="align-middle text-center" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $item)
                            <tr>
                                <th class="align-middle text-center" scope="row">{{ $loop->iteration }}</th>
                                <td class="align-middle text-center">{{ $item->book?->title }}</td>
                                <td class="align-middle text-center">{{ $item->tanggal }}</td>
                                <td class="align-middle text-center">{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
