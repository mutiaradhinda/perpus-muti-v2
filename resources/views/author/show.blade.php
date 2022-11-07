@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $author->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $author->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Telepon</th>
                <td>{{ $author->telepon }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $author->email }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection