@extends('templates/main')

@section('title', 'bantuan')


@section('container')
    <div class="container">
        <h1>Nama : {{$help->nama}}</h1>
        <h1>Email : {{$help->email}}</h1>
        <h1>Subject : {{$help->subject}}</h1>
        <h1>Isi : {{$help->isi}}</h1>
        <form action="{{ $help->id}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
