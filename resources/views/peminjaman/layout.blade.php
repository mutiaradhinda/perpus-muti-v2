@extends('peminjaman.admin.admin')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Perpustakaan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>


@include('peminjaman/admin/header')
@include('peminjaman/admin/sidebar')
@include('peminjaman/admin/footer')

<div class="container">
    @yield('content')


    
</div>

</body>
</html>
@endsection