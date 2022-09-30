@extends('layouts.main') 	
@include('book.index')
@section('container')

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
    <div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="id" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th width="280px">Sinopsis</th>
            <th>Sampul</th>
            <th width="400px">Action</th>
        </tr>
        @foreach ($buku as $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->tahun_terbit }}</td>
            <td>{{ @$value->author->nama }}</td>
            <td>{{ @$value->publisher->nama }}</td>
            <td>{{ $value->kategori->kategori }}</td>
            <td>{{ $value->sinopsis }}</td>
            <td><img src="/image/{{ $value->image }}" width="100px"></td>
            <td>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
</div>
    {!! $buku->links() !!}

 @endsection
