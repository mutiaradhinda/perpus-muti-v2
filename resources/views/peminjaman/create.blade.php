@extends('layouts.main')

@section('content')

 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('peminjamen.index') }}" class="btn btn-primary btn-sm">Kembali</a>
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
    <form action="{{ route('peminjamen.store') }}" method="post" enctype="multipart/form-data">
        @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Buku:</strong>
            </div>
            <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="id_buku" id="id_buku">
            <option disabled value>Pilih Buku</option>
            @foreach($b as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anggota:</strong>
                <input type="text" name="anggota" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal pinjam:</strong>
                <input type="Date" name="tanggal_pinjam" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali:</strong>
                <input type="Date" name="tanggal_kembali" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Denda:</strong>
                <input type="text" name="denda" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" class="form-control" name="status" id="status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>

</form>
</div>
@endsection
