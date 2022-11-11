@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $author->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $author->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Telepon</th>
                <td>{{ $author->telepon }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $author->email }}</td>
            </tr>
        </table>
    </div>
</div>

<div class="card card-primary">
<div class="card-header">
        <h2 class="card-title">Daftar Buku {{ $author->nama }}</h2>
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
            <i class="fa fa-plus-circle"></i>Tambah Data</a>
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
                </tr>
                <?php $no=1; foreach ($author->getListBuku() as $buku): ?>
                <tr>
                    <td style="text-align:center;"><?= $no; ?></td>
                    <td style="text-align:center;"><?= $buku->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->tahun_terbit; ?></td>
                    <td style="text-align:center;"><?= $buku->author->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->publisher->nama; ?></td>
                    <td style="text-align:center;"><?= $buku->kategori->kategori; ?></td>
                    <td style="text-align:center;"><?= $buku->sinopsis; ?></td>
                    <td style="text-align:center;"><img src="/image/{{ $buku->image }}" width="100px"></td>
                </tr>
                <?php $no++; endforeach ?>
            </table>
        </div>
    </div>
</div>
@endsection