@extends('user.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data User</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $user->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Username</th>
                <td>{{ $user->Username}}</td>
            </tr>
            <tr>
                <th style="width: 180px">User Role</th>
                <td>{{ $user->user_role }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection