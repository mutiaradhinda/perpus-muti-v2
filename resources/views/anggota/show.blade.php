@extends('anggota.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data User</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $anggota->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Username</th>
                <td>{{ $anggota->username }}</td>
            </tr>
            <tr>
                <th style="width: 180px">User Role</th>
                <td>{{ $anggota->user_role }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection