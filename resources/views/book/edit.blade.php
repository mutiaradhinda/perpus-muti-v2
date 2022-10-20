@extends('book.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Edit Data Buku</h2>
    </div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <a href="{{ route('book.index') }}" class="btn btn-primary btn-sm">Kembali</a>
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
<form action="{{ URL('book.update', @$book->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Buku:</strong>
                <input type="text" name="nama" class="form-control" value="{{old('nama')}}"autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Terbit:</strong>
                <input type="text" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit',@$book->tahun_terbit) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
            </div>
            <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="id_penulis" id="id_penulis" value="{{ old('nama',@$book->id_penulis) }}">
            <option disabled value>Pilih Penulis</option>
            @foreach($a as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
            </div>
            <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="id_penerbit" id="id_penerbit">
            <option disabled value>Pilih Penerbit</option>
            @foreach($p as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
            </div>
            <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="id_kategori" id="id_kategori">
            <option disabled value>Pilih Kategori</option>
            @foreach($k as $item)
            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
            @endforeach
        </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis:</strong>
                <textarea class="form-control" style="height:150px" name="sinopsis">{{ @$book->sinopsis }}</textarea>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sampul:</strong>
                <input type="file" name="image" class="form-control" value="{{ old('nama',@$book->id) }}">
                <img src="/image/{{ @$book->image }}" width="300px">
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection
