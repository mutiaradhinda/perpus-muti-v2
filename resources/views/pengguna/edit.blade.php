@extends('layouts.main')

@section('content')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 borde-bottom">
    
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <a href="{{ route('penggunas.index') }}" class="btn btn-primary btn-sm">Kembali</a>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="card-body">
<form action="{{ route('penggunas.update',$pengguna->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" value="{{ old('nama',$pengguna->username) }}" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Akses Token:</strong>
                <input type="text" name="akses_token" class="form-control" value="{{ old('nama',$pengguna->akses_token) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anggota:</strong>
                <input type="text" name="id_anggota" class="form-control" value="{{ old('nama',$pengguna->id_anggota) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" value="{{ old('nama',$pengguna->password) }}">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin:</strong>
                <input type="text" name="id_admin" class="form-control" value="{{ old('nama',$pengguna->id_admin) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Petugas:</strong>
                <input type="text" name="id_petugas" class="form-control" value="{{ old('nama',$pengguna->id_petugas) }}">
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection
