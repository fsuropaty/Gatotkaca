@extends('templates/main')
@section('title', 'Daftar')

@section('container')
<body>
<h2>Daftar Akun</h2>
<div class="container">
    <div class="mb-3">
        <div class="col">
            <h3>Nama</h3>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <h3>Email</h3>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="mb-3">
        <div class="col">
            <h3>Password</h3>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <h3>Ulangi Password</h3>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="button">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Daftar Akun</button>
        </div>
    </div>
</div>
</body>
@endsection