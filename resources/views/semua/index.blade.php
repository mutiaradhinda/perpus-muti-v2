@extends('semua.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data User</h2>
    </div>

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ route('semua.create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Nama</th>
                    <th style="text-align:center">Username</th>
                    <th style="text-align:center">User Role</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($semua as $value)
                <tr>
                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                    <td style="text-align:center;">{{ $value->nama }}</td>
                    <td style="text-align:center;">{{ $value->username }}</td>
                    <td style="text-align:center;">{{ @$value->role->role}}</td>
                <td>
                <form style="text-align:center;" action="{{ route('semua.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('semua.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('semua.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Delete</button>
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
