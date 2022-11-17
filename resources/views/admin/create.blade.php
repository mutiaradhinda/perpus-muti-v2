@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Tambah Admin</h2>
    </div>
<div class="card shadow mb-4">
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
    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @csrf

     <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>User Role:</strong>
              </div>
          <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="user_role" id="user_role" autofocus>
              <option disabled value>User Role</option>
              @foreach($u as $item)
              <option value="{{ $item->id }}">{{ $item->role }}</option>
              @endforeach
          </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" placeholder="" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control">
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Admin:</strong>
              </div>
          <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="user_role" id="user_role">
              <option disabled value>Nama Admin</option>
              @foreach($u as $item)
              <option value="{{ $item->id }}">{{ $item->role }}</option>
              @endforeach
          </select>
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.index') }}" class="btn btn-primary">Kembali</a>
        </div>
</form>
</div>
</div>
@endsection
