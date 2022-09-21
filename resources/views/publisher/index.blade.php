@extends('publisher.layout')

@section('content')

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
        <a href="{{ route('publishers.create') }}" class="btn btn-primary btm-sm">Create</a>
        <a href="{{ url('penerbit') }}" target="_blank" class="btn btn-success btm-sm">Export PDF</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="id" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Penerbit</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($publisher as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->telepon }}</td>
            <td>{{ $value->email }}</td>
            <td>
        <form action="{{ route('publishers.destroy',$value->id) }}" method="POST">
     
            <a class="btn btn-info" href="{{ route('publishers.show',$value->id) }}">Show</a>
      
            <a class="btn btn-primary" href="{{ route('publishers.edit',$value->id) }}">Edit</a>
     
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
    {!! $publisher->links() !!}
@endsection
