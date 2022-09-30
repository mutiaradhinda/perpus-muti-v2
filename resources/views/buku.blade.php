@extends('layouts.main') 	

@section('container')

<div class="card card-primary">
    <div class="card-header">
        <h5 class="card-title">Data Buku</h5>
    </div>
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
 
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
            
        
    </table>
    </div>

</div>
</div>

  

 @endsection
