@extends('role.layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data User Role</h2>
    </div>

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

<div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center">User Role</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>
                @foreach ($role as $value)
                <tr>
                    <td style="text-align:center;">{{ $loop->iteration }}</td>
                    <td style="text-align:center;">{{ $value->role}}</td>
                <td>
                <form style="text-align:center;" action="{{ route('role.destroy',$value->id) }}" method="POST">
         
                    <a class="btn btn-info" href="{{ route('role.show',$value->id) }}">Show</a>
          
                    <a class="btn btn-primary" href="{{ route('role.edit',$value->id) }}">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Delete</button>
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection