@extends('layout.master')
@section('content')
<div class="card w-20" style="width: 18rem; margin: auto; margin-top: 100px;">
    <img src="{{asset('images/'.$movie->movie_img)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" style="color: #141414;text-align: center;font-weight: bold;">{{$movie->movie_name}}</h5>
        <p class="card-text" style="color: #141414;text-align: center;">{{$movie->movie_description}}</p>
        <a href="https://www.youtube.com/results?search_query={{$movie->movie_name}} official trailer" class="btn btn-primary" style="margin-left: 71px;">Show Trailer</a>
    </div>
</div>
</body>
</html>
@endsection
