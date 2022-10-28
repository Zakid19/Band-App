<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenreController extends Controller
{
    public function create()
    {
       return view('genres.create', [
        'title' => 'Genre',
        'title2' => '',
       ]);
    }

    public function store(GenreRequest $request)
    {
        Genre::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('success', 'The genre was created' );
    }

    public function show()
    {
       return view('genres.show', [
        'genres' => Genre::latest()->SimplePaginate(12),
        'title' => 'Genre',
        'title2' => 'Create',
       ]);
    }

    public function edit(Genre $genre)
    {
       return view('genres.edit', [
        'genre' => $genre,
       'title' => 'Genre',
       'title2' => 'Edit',
        ]);
    }

    public function update(Genre $genre, GenreRequest $request)
    {
        $genre->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('genre')->with('success', 'The genre was created' );
    }

    public function destroy(Genre $genre)
    {
       $genre->delete();
    }
}
