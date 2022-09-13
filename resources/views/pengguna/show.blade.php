@extends('pengguna.layout')

@section('content')
   
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"></div>
        </div>
     </div>
     
    <div class="card-header py-3">
        <a href="{{ route('penggunas.index') }}" class="btn btn-primary btm-sm">Kembali</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                {{ $pengguna->username}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Akses Token:</strong>
                {{ $pengguna->akses_token }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Role:</strong>
                {{ $pengguna->id_user_role}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anggota:</strong>
                {{ $pengguna->id_anggota}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{ $pengguna->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin:</strong>
                {{ $pengguna->id_admin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Petugas:</strong>
                {{ $pengguna->id_petugas }}
            </div>
        </div>
    </div>
</div>

@endsection