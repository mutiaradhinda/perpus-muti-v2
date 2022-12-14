@extends('layouts.main')

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
        <a href="{{ route('penggunas.create') }}" class="btn btn-primary btm-sm">Create</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="id" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Akses Token</th>
            <th>User Role</th>
            <th>Anggota</th>
            <th>Password</th>
            <th>Admin</th>
            <th>Petugas</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->akses_token }}</td>
            <td>{{ $value->id_user_role }}</td>
            <td>{{ $value->id_anggota }}</td>
            <td>{{ $value->password }}</td>
            <td>{{ $value->id_admin }}</td>
            <td>{{ $value->id_petugas }}</td>
            <td>
        <form action="{{ route('penggunas.destroy',$value->id) }}" method="POST">
     
            <a class="btn btn-info" href="{{ route('penggunas.show',$value->id) }}">Show</a>
      
            <a class="btn btn-primary" href="{{ route('penggunas.edit',$value->id) }}">Edit</a>
     
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
    {!! $data->links() !!}
@endsection
