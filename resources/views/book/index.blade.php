@extends('layouts.main')

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
                    <th style="text-align:center;">Judul Buku</th>
                    <th style="text-align:center;">Tahun Terbit</th>
                    <th style="text-align:center;">Penulis</th>
                    <th style="text-align:center;">Penerbit</th>
                    <th style="text-align:center">Kategori</th>
                    <th width="200px" style="text-align: center;">Sinopsis</th>
                    <th style="text-align:center;">Sampul</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($book as $value)
                <tr>
                    <td style="text-align:center">{{ $loop->iteration }}</td>
                    <td style="text-align:center">{{ $value->nama }}</td>
                    <td style="text-align:center" style="text-align:center">{{ $value->tahun_terbit }}</td>
                    <td style="text-align:center">{{ @$value->author->nama }}</td>
                    <td style="text-align:center">{{ @$value->publisher->nama }}</td>
                    <td style="text-align:center">{{ $value->kategori->kategori }}</td>
                    <td style="text-align:center">{{ $value->sinopsis }}</td>
                    <td style="text-align:center"><img src="/image/{{ $value->image }}" width="100px"></td>
                <td style="text-align:center">
                <form action="{{ route('book.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('book.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('book.edit',$value->id) }}">Edit</a>
         
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


