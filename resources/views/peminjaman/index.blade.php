@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
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
            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('export') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
            <a href="{{ url('excel') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center">Nama Buku</th>
                    <th style="text-align:center">Nama Anggota</th>
                    <th style="text-align:center;">Tanggal Pinjam</th>
                    <th style="text-align:center;">Tanggal Kembali</th>
                    <th style="text-align:center;">Denda</th>
                    <th style="text-align:center;">Status</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($peminjaman as $value)
                <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->book->nama }}</td>
                    <td>{{ $value->anggota }}</td>
                    <td>{{ $value->tanggal_pinjam }}</td>
                    <td>{{ $value->tanggal_kembali }}</td>
                    <td>{{ $value->denda }}</td>
                    <td>{{ $value->status }}</td>
                <td>
                <form action="{{ route('peminjaman.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('peminjaman.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('peminjaman.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection