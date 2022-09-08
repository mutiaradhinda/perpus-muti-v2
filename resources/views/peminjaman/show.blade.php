@extends('peminjaman.layout')

@section('content')
   
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"></div>
        </div>
     </div>
     
    <div class="card-header py-3">
        <a href="{{ route('peminjamen.index') }}" class="btn btn-primary btm-sm">Kembali</a>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $peminjaman->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Buku:</strong>
                {{ $peminjaman->id_buku }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anggota:</strong>
                {{ $peminjaman->id_anggota }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam:</strong>
                {{ $peminjaman->tanggal_pinjam}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali:</strong>
                {{ $peminjaman->tanggal_kembali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Denda:</strong>
                {{ $peminjaman->denda }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $peminjaman->status }}
            </div>
        </div>
    </div>
</div>
    

@endsection
