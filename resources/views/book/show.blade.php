@extends('book.layout')

@section('content')
   
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"></div>
        </div>
     </div>
     
    <div class="card-header py-3">
        <a href="{{ route('book.index') }}" class="btn btn-primary btm-sm">Kembali</a>
    </div>


    <div class="row">
        <tbody>
        <table class="table table-striped">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $book->nama }}
            </div>
        </div>
        </table>
        <table class="table table-striped">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Terbit:</strong>
                {{ $book->tahun_terbit }}
            </div>
        </div>
    </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
                {{ $book->author->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                {{ $book->publisher->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $book->kategori->kategori }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis:</strong>
                {{ $book->sinopsis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $book->image }}" width="300px">
            </div>
        </div>
    </tbody>
    </div>

    

@endsection
