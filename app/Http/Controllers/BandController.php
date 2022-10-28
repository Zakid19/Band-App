<?php

namespace App\Http\Controllers;

use App\Http\Requests\BandRequest;
use App\Models\Band;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BandController extends Controller
{
    public function create()
    {
       return view('bands.create', [
        'genres' => Genre::get(),
        'title' => 'Band',
        'title2' => 'Create',
       ]);
    }

    public function store(BandRequest $request)
    {
       $thumbnail = $request->file('thumbnail')->store('public/image/bands');

       $band = Band::create([
            'name' => $request->name,
            'thumbnail' => $thumbnail,
            'slug' => Str::slug(request('name')),
       ]);

       $band->genres()->sync($request->genres);

       return redirect('band');
    }

    public function show()
    {
        if (request()->expectsJson()) {
            return Band::latest()->get(['id', 'name']);
        }
       return view('bands.show', [
        'bands' => Band::latest()->simplePaginate(12),
        'title' => 'Band',
        'title2' => '',
       ]);
    }

    public function edit(Band $band)
    {
        return view('bands.edit', [
            'genres' => Genre::get(),
            'band' => $band,
            'title' => 'Band',
            'title2' => 'Edit',
        ]);
    }

    public function update(BandRequest $request, Band $band)
    {
           $thumbnail = $band->thumbnail;

           if ($request->hasFile('thumbnail')) {
            Storage::delete($band->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('public/image/bands');
           }


       $band->update([
            'name' => request('name'),
            'thumbnail' => $thumbnail,
            'slug' => Str::slug(request('name')),
       ]);

            if ($request->has('genres')) {
                $band->genres()->sync($request->genres);
            }

            return redirect('band');
    }

    public function destroy(Band $band)
    {
        Storage::delete($band->thumbnail);
        $band->genres()->detach();
        $band->albums()->delete();
        $band->delete();
    }
}
