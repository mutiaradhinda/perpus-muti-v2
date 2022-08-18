@extends('posts.layout')

@section('content')


    <ol class="breadcrumb float-sm-left">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Buku</a></li>
    </ol>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Buku</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('posts.create') }}" class="btn btn-primary btm-sm">Create Buku</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th width="280px">Sinopsis</th>
            <th>Sampul</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->tahun_terbit }}</td>
            <td>{{ $value->id_penulis }}</td>
            <td>{{ $value->id_penerbit }}</td>
            <td>{{ $value->id_kategori }}</td>
            <td>{{ $value->sinopsis }}</td>
            <td><img src="/image/{{ $value->image }}" width="100px"></td>
            <td>
        <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
     
            <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>
      
            <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
    {!! $data->links() !!}
@endsection
