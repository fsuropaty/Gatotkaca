@extends('templates/main')

@section('title', 'News')

@section('container')
    <div class="container">
        <h2 class="mt-3">News</h2>

        
        @foreach ($news as $item)
        <div className="border border-danger-10 ">
            <img className="card-img-top" src={{$item ['urlToImage']}} alt="Card image cap" />
            <div className="card-body">
              <h5 className="card-title">{{$item ['title']}}</h5>
              <p className="card-text">{{$item ['content']}}</p>
              <a href={{$item['url']}} className="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
        
    </div>

@endsection
