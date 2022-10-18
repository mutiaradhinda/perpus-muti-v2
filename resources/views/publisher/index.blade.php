@extends('publisher.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penerbit</h2>
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
<<<<<<< HEAD
        <div style="margin-bottom: 20px">
            <a href="{{ route('publishers.create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('penerbit') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
            <a href="{{ url('publisher') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center">Nama Penerbit</th>
                    <th style="text-align:center">Alamat</th>
                    <th style="text-align:center;">Telepon</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Jumlah Buku</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($data as $value)
                <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->telepon }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->getJumlahBuku() }}</td>
                <td>
                <form action="{{ route('publishers.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('publishers.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('publishers.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
=======
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="id" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Penerbit</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Jumlah Buku</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($publisher as $key => $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->telepon }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->getJumlahBuku() }}</td>
            <td>
        <form action="{{ route('publishers.destroy',$value->id) }}" method="POST">
     
            <a class="btn btn-info" href="{{ route('publishers.show',$value->id) }}">Show</a>
      
            <a class="btn btn-primary" href="{{ route('publishers.edit',$value->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection