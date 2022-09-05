@extends('author.layout')

@section('content')
   
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        
        <ul class="nav-item">
            <li class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>
            </li>
        </ul>
    </nav>

    <ul class="navbar-nav ml-auto">
        <form action="/logout" method="post">
            @csrf
        <a href="{{ route('authors.index') }}" class="btn btn-primary btm-smarrow-in-right">Kembali</a>
        </form>
    </ul>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penulis:</strong>
                {{ $author->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $author->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon:</strong>
                {{ $author->telepon}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $author->email }}
            </div>
        </div>
    </div>
</div>
    

@endsection
