<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();
        return view('movies', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return  Application|Factory|View|\Illuminate\Http\Response
     */

    public function store(Request $request)
    {
//        $newImage = uniqid('', true). $request->movie_image;
//        $request->movie_image->move(public_path('images'),$newImage);
//        dd($newImage);

            $destinationPath = storage_path('public/images');
            $file = $request->movie_image;
            $fileName = uniqid('', true) . '.' . $file->clientExtension();
            $file->move(public_path('images'),$fileName);
            $movie = new Movies;
            $movie->movie_name = $request->movie_name;
            $movie->movie_description = $request->movie_description;
            $movie->movie_gener = $request->movie_gener;
            $movie->movie_img = $fileName;
            $movie->save();
            return redirect('movies');
        }
    /**
     * Display the specified resource.
     *
     * @param movies $movies
     * @return Application|Factory|View|\Illuminate\Http\Response
     */

        public function show()
    {
        $movies = Movies::all();
        return view('welcome', [
            'movies' => $movies
        ]);
    }
        public function show_movie($movie)
    {
        $movie = movies::find($movie);
        return view('show', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param movies $movies
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function edit(movies $movie)
    {
        return view('edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request , $movies): RedirectResponse
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
        ]);
        $movie = movies::find($movies);
        $file = $request->movie_image;
        $fileName = uniqid('', true) . '.' . $file->clientExtension();
        $file->move(public_path('images'),$fileName);
        $movie->movie_name = $request->movie_name;
        $movie->movie_description = $request->movie_description;
        $movie->movie_gener = $request->movie_gener;
        $movie->movie_img = $fileName;
        $movie->save();
        return redirect()->route('movies.index')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param movies $movies
     * @return RedirectResponse
     */
    public function destroy(movies $movie): RedirectResponse
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
