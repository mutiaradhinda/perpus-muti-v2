@extends('layouts.main')

@section('content')
   <div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Edit User</h2>
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
<form action="{{ route('semua.update',@$semua->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>User Role:</strong>
              </div>
          <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="user_role" id="user_role">
              <option disabled value>User Role</option>
              @foreach($r as $item)
              <option value="{{ $item->id }}">{{ $item->role }}</option>
              @endforeach
          </select>
          </div>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" value="{{ old('nama',@$semua->username) }}" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" value="{{ old('nama',@$semua->password) }}" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>User Role:</strong>
              </div>
          <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="user_role" id="user_role">
              <option disabled value>Nama Admin</option>
              @foreach($r as $item)
              <option value="{{ $item->id }}">{{ $item->role }}</option>
              @endforeach
          </select>
          </div>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('semua.index') }}" class="btn btn-primary btn-sm">Kembali</a>
        </div>
    </div>

</form>
@endsection
