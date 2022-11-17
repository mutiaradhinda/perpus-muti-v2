@extends('layouts.main')

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
            <a href="{{ url('data') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
            <a href="{{ url('data kategori') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th width="50px"style="text-align:center;">No</th>
                    <th style="text-align:center">Kategori</th>
                    <th width="100px" style="text-align:center;">Jumlah Buku</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($kategori as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->kategori }}</td>
                    <td>{{ $value->getJumlahBuku() }}</td>
                <td>
                <form style="text-align:center" method="POST">
         
                    <a class="btn btn-info" href="{{ route('kategori.show',$value->id) }}">Show</a>
          
                    
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection