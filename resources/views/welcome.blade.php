@extends ('layout.master')
@section ('content')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
        <div class="location" id="home">
            <h1 id="home">Popular on Netflix</h1>
            <div class="box">
                @foreach($movies as $movie)
                    <a href="{{route('movies.show_movie',$movie->id)}}"><img src="{{asset('images/'.$movie->movie_img)}}" alt=""></a>
                @endforeach
            </div>
        </div>


        <h1 id="myList">Trending Now</h1>
        <div class="box">
            @foreach($movies->slice(0, 8) as $movie)
            <a href="{{route('movies.show_movie',$movie->id)}}"><img src="{{asset('images/'.$movie->movie_img)}}" alt=""></a>
            @endforeach
        </div>

        <h1 id="tvShows">TV Shows</h1>
        <div class="box">
            @foreach($movies->slice(5, 10) as $movie)
                <a href="{{route('movies.show_movie',$movie->id)}}"><img src="{{asset('images/'.$movie->movie_img)}}" alt=""></a>
            @endforeach
        </div>


        <h1 id="movies">Blockbuster Action & Adventure</h1>
        <div class="box">
            @foreach($movies->slice(2, 5) as $movie)
                <a href="{{route('movies.show_movie',$movie->id)}}"><img src="{{asset('images/'.$movie->movie_img)}}" alt=""></a>
            @endforeach
        </div>

        <h1 id="originals">Netflix Originals</h1>
        <div class="box">
            @foreach($movies->slice((count($movies)-6),(count($movies)-6)) as $movie)
                <a href="{{route('movies.show_movie',$movie->id)}}"><img src="{{asset('images/'.$movie->movie_img)}}" alt=""></a>
            @endforeach
        </div>
    </section>
        <!-- END OF MAIN CONTAINER -->

        <!-- LINKS -->
@endsection

