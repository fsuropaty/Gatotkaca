@extends('templates/main')
@section('title', 'Masuk')

@section('container')

<link rel="stylesheet" href="./css/daftar.css">
<body>
<h2>Daftar Akun</h2>
<div class="row">
    <div class="col">
        <h3>Nama</h3>
        <input type="text" class="form-control">
    </div>
    <div class="col">
        <h3>Email</h3>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col">
        <h3>Password</h3>
        <input type="text" class="form-control">
    </div>
    <div class="col">
        <h3>Ulangi Password</h3>
        <input type="text" class="form-control">
    </div>
</div>
<div class="button">
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Daftar Akun</button>
    </div>
</div>
</body>
@endsection