@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Admin</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">User Role</th>
                <td>{{ @$semua->role->role }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Username</th>
                <td>{{ @$semua->username }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Password</th>
                <td>{{ @$semua->password }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Nama Admin</th>
                <td>{{ @$semua->role->role }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection