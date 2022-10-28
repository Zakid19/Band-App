<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function create()
    {
       return view('albums.create', [
        'bands' => Band::get(),
        'title' => 'Album',
        'title2' => 'Create',
       ]);
    }

    public function store(AlbumRequest $request)
    {
        Album::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'band_id' => $request->band,
            'year' => $request->year,
        ]);

        return redirect('album');
    }

    public function show()
    {
        return view('albums.show', [
         'albums' => Album::get(),
         'title' => 'Album',
         'title2' => '',
        ]);
    }

    public function edit(Album $album)
    {
       return view('albums.edit', [
        'album' => $album,
        'bands' => Band::get(),
        'title' => 'Album',
        'title2' => 'Edit',
       ]);
    }

    public function update(Album $album, AlbumRequest $request)
    {
        $album->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'band_id' => $request->band,
            'year' => $request->year,
        ]);

        return redirect('album');
    }

    public function getAlbumsByBandId(Band $band)
    {
        return $band->albums;
    }

    public function destroy(Album $album)
    {
        $album->delete();
    }
}
