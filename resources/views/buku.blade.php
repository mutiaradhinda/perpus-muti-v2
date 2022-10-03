@extends('layouts.main') 	

@section('container')

<div class="row">
    <div class="col-md-24">
        <div class="card-body">
        <h5 class="card-header bg-danger">Data Buku</h5>
    </div>
</div>
<div class="card-body ">
  @foreach ($images as $image)
    <img src="{{ $image }}" width=230 height=380 margin-left=20>
    <div class="card-body">
      <h5 class="card-title">Laut Bercerita</h5>
      <a class="btn btn-primary" href="/">Detail Buku</a>
    </div>
    @endforeach
  </div>    
</div>

</div>
 @endsection
