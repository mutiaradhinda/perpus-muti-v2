@extends('kategori.layout')

@section('content')
   
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"></div>
        </div>
     </div>
     
    <div class="card-header py-3">
        <a href="{{ route('kategori.index') }}" class="btn btn-primary btm-sm">Kembali</a>
    </div>

    <section class="content">
    <div class="card-body">
    <table class="table table-bordered table-striped">
    <tr>
    <th width="500px";
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $kategori->kategori }}
            </td>
        </div>
    </div>
</th>
</tr>
</div>
</section>
</table>
</div>

@endsection
