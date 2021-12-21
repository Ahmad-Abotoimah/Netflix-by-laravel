
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<button class="btn btn-primary my-5 mx-5 px-5" style="margin-left: 1050px !important; margin-bottom: -100px !important;"><a href="{{route('movies.create')}}" style="color: white;">add</a></button>
<button class="btn btn-primary my-5 mx-5 px-5" style="margin-left: -350px !important; margin-bottom: -100px !important;"><a href="http://127.0.0.1:8000/movies/show" style="color: white;">web</a></button>
<table class="table  mx-5 w-50" style="margin: auto !important; margin-top: 100px !important;">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">movie name</th>
        <th scope="col">movie description</th>
        <th scope="col">movie gener</th>
        <th scope="col"> do </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($movies as $movie)
    <tr>
        <th scope="row">{{$movie->id}}</th>
        <td>{{$movie->movie_name}}</td>
        <td>{{$movie->movie_description}}</td>
        <td>{{$movie->movie_gener}}</td>
        <td><img src="{{asset('images/'.$movie->movie_img)}}" alt="dfg"></td>
        @method('destroy')
        <td>
            <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
        </td>
        <td>
           <form method="post" action="{{ route('movies.destroy',$movie->id) }}">
                @csrf
               @method('delete')
           <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
