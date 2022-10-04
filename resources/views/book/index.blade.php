@extends('book.layout')

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
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th width="200px" style="text-align: center;">Sinopsis</th>
                    <th>Sampul</th>
                    <th width="250px" style="text-align: center;">Action</th>
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
                </tr>
                <form action="{{ route('book.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('book.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('book.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
