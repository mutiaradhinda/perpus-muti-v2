@extends('kategori.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Kategori</h2>
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

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary btm-sm">Create</a>
        <a href="{{ url('data') }}" target="_blank" class="btn btn-danger btm-sm">Export PDF</a>
        <a href="{{ url('data kategori') }}" target="_blank" class="btn btn-success btm-sm">Export Excel</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="id" width="100%" cellspacing="0">
        <tr>
            <th width="10px">No</th>
            <th>Kategori</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($kategori as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->kategori }}</td>
            <td>
        <form action="{{ route('kategori.destroy',$value->id) }}" method="POST">
     
            <a class="btn btn-info" href="{{ route('kategori.show',$value->id) }}">Show</a>
      
            <a class="btn btn-primary" href="{{ route('kategori.edit',$value->id) }}">Edit</a>
     
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
</div>
    {!! $kategori->links() !!}
@endsection
