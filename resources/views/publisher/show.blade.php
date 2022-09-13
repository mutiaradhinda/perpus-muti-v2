@extends('publisher.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penerbit</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $publisher->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $publisher->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Telepon</th>
                <td>{{ $publisher->telepon }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $publisher->email }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection