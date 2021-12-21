
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 8 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Movie Name:</strong>
                    <input type="text" name="movie_name" value="{{ $movie->movie_name }}" class="form-control" placeholder="Movie Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Movie Description:</strong>
                    <input type="textarea" name="movie_description" class="form-control" placeholder="Movie Description" value="{{ $movie->movie_description }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Movie Gener:</strong>
                    <input type="text" name="movie_gener" value="{{ $movie->movie_gener }}" class="form-control" placeholder="Movie Gener">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1">Movie Image</label>
                <input type="file" class="form-control" id="exampleCheck1" name="movie_image" value="{{ $movie->movie_img }}">
            </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">edit</button>
        </div>
    </form>
</div>
</body>
</html>
