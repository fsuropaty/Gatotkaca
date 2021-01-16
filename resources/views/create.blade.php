@extends('templates/main')

@section('title', 'bantuan')


@section('container')
    <div class="container">

        <h2 class="mt-3">bantuan</h2>

        <form method="post" action="/bantuan">
            @csrf
            <div class="mb-3">
            <label for="nama">nama</label><br>
            <input type="text" class="form-control" id="nama" name="nama"><br>
            </div>

            <label for="email">Email</label><br>
            <input type="text" class="form-control" id="email" name="email" ><br><br>

            <label for="subject">subject</label><br>
            <input type="text" class="form-control" id="subject" name="subject"><br><br>

            <div class="mb-3">
                <label for="isi" class="form-label">isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
