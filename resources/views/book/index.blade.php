@extends('book.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Buku</h2>
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
            <a href="{{ route('book.create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
            <a href="{{ url('export data') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
<<<<<<< HEAD
                    <th style="text-align:center;">Judul Buku</th>
                    <th style="text-align:center;">Tahun Terbit</th>
=======
                    <th style="text-align:center">Judul Buku</th>
                    <th style="text-align:center">Tahun Terbit</th>
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
                    <th style="text-align:center;">Penulis</th>
                    <th style="text-align:center;">Penerbit</th>
                    <th style="text-align:center">Kategori</th>
                    <th width="200px" style="text-align: center;">Sinopsis</th>
<<<<<<< HEAD
                    <th style="text-align:center;">Sampul</th>
                    <th width="300px" style="text-align: center;">Action</th>
=======
                    <th style="text-align:center">Sampul</th>
                    <th width="250px" style="text-align: center;">Action</th>
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
                </tr>
                @foreach ($book as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->tahun_terbit }}</td>
                    <td>{{ @$value->author->nama }}</td>
                    <td>{{ @$value->publisher->nama }}</td>
                    <td>{{ $value->kategori->kategori }}</td>
                    <td>{{ $value->sinopsis }}</td>
                    <td><img src="/image/{{ $value->image }}" width="100px"></td>
<<<<<<< HEAD
                <td>
=======
                </tr>
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
                <form action="{{ route('book.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('book.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('book.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
<<<<<<< HEAD
                </td>
                </tr>
=======
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
                @endforeach
            </table>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 2b9c94035f227cadef9ba32ea8860fbbb714554d
