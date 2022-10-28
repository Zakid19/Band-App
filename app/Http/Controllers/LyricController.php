<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use App\Models\Lyric;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LyricController extends Controller
{
    public function create()
    {
       return view('lyrics.create', [
        'title' => 'Lyric',
        'title2' => 'Create',
       ]);
    }

    public function store()
    {
        request()->validate([
            'album' => 'required',
            'band' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

       $band = Band::find(request('band'));

       $band->lyrics()->create([
            'title' => request('title'),
            'body' => request('body'),
            'slug' => Str::slug(request('title')),
            'album_id' => request('album')
       ]);

       return response()->json(['message' => 'The lyrics was created into band' . $band->name]);
    }

    public function show()
    {
        return view('lyrics.show', [
        'lyrics' => Lyric::latest()->simplePaginate(1),
        'albums' => Album::get(),
        'bands' => Band::get(),
        'title' => 'Lyric',
        'title2' => '',
        ]);
    }

    public function edit(Lyric $lyric)
    {
       return view('lyrics.edit', [
        'lyric' => $lyric,
        'title' => 'Lyric',
        'title2' => 'Edit',
       ]);
    }

    public function update(Lyric $lyric)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $lyric->update([
            'title' => request('title'),
            'body' => request('body'),
            'slug' => Str::slug(request('title')),
        ]);

        return redirect('lyric')->with('success', 'Lyric berhasil diupdate');
    }

    public function details(Lyric $lyric)
    {
       return view('lyrics.detail', [
        'lyric' => $lyric,
        'title' => 'Lyric',
        'title2' => 'Details',
        'titleLyric' => $lyric->title,
       ]);
    }
}
