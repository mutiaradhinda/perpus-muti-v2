@extends('anggota.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Tambah Anggota</h2>
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
    <form action="{{ route('anggota.store') }}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="" autofocus>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>username:</strong>
                <input type="text" name="username" class="form-control" placeholder="" autofocus>
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Role:</strong>
            <select class="form-control select2" style="width: 100%;" name="user_role">
              <option disabled value>User Role</option>
              <option>Anggota</option>
            </select>
            </div>
        </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{ route('anggota.index') }}" class="btn btn-primary">Kembali</a>
            </div>
   

</form>
</div>
</div>
@endsection
