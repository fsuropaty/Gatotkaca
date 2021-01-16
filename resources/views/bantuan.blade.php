@extends('templates/main')

@section('title', 'bantuan')

@section('container')
    <div class="container">
        <h2>List Bantuan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">isi</th>
                    <th scope="col">detail</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($helps as $help)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$help -> nama}}</td>
                    <td>{{$help -> email}}</td>
                    <td>{{$help -> subject}}</td>
                    <td>{{$help -> isi}}</td>
                    <td><a href="/bantuan/{{ $help->id}}" type="button" class="btn btn-primary" >detail</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
