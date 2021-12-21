@extends('layout.master')
@section('content')
<div class="card w-20" style="width: 18rem; margin: auto; margin-top: 100px;">
    <img src="{{asset('images/'.$movie->movie_img)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" style="color: #141414 !important;">{{$movie->movie_name}}</h5>
        <p class="card-text" style="color: #141414 !important;">{{$movie->movie_description}}</p>
        <a href="http://127.0.0.1:8000/movies/show" class="btn btn-primary">back to web</a>
    </div>
</div>
</body>
</html>
@endsection
