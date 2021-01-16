@extends('templates/main')
@section('title', 'Personal')

@section('container')
    <div class="container">
    <link rel="stylesheet" href="./css/personal.css">
<body>
<h2>Profil</h2>

<div class="d-inline-flex">
    <div class="list-1">
        <div class="d-flex flex-column">
            <div class="p1"><img src="../assets/profile.png"></div>
            <p><a href="#">Ganti Foto</a></p>
        </div>
    </div>
    <div class="list-2">
        <div class="d-inline-flex">
            <div class="d-flex flex-column">
                <div class="p1">Nama
                <p>Ahmad Subarjo</p>
                </div>
                <div class="p2">Email
                    <p>ahmads97@example.com</p>
                    <p><a href="#">Ganti Email</a></p>
                </div>
                <div class="p3">Password
                    <p><a href="#">Ganti Password</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="button">
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-default">Batal</button>
        <button type="submit" class="btn btn-default">Simpan</button>
    </div>
</div>
</body>
    </div>
    
@endsection