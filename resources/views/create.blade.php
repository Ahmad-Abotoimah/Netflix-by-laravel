<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

</head>
<body>

<form method="post" action="{{route('movies.store')}}" class="m-5 w-50" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Movie Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="movie_name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Movie Description </label>
        <input class="form-control" id="exampleInputPassword1" name="movie_description" type="textarea">
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleCheck1">Movie Gener</label>
        <input type="text" class="form-control" id="exampleCheck1" name="movie_gener">
    </div>
    <div class="mb-3">
        <label class="form-label" for="exampleCheck1">Movie Image</label>
        <input type="file" class="form-control" id="exampleCheck1" name="movie_image">
    </div>
    <button type="submit" class="btn btn-primary">add</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
