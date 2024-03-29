@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Peminjaman</h2>
    </div>
    <div class="card shadow mb-4">
<div class="card-header py-3">
    <a href="{{ route('peminjaman.index') }}" class="btn btn-primary btn-sm">Kembali</a>

    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $data->book->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Tahun Terbit</th>
                <td>{{ $data->tahun_terbit }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penulis</th>
                <td>{{ $data->author->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penerbit</th>
                <td>{{ $data->publisher->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Kategori</th>
                <td>{{ $book->kategori->kategori }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Kategori</th>
                <td>{{ $book->kategori->kategori }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sinopsis</th>
                <td>{{ $book->sinopsis }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sampul</th>
                <td><img src="/image/{{ $book->image }}" width="100px"></td>
            </tr>
        </table>
    </div>
</div>
</div>
@endsection

