@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">Album Table
        <a href="{{ route('albums.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class=""></i>Create</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Band</th>
                <th scope="col">Year</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach($albums as $index => $album)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $album->name }}</td>
                <td>{{ $album->band->name}}
                </td>
                <td>{{ $album->year }}</td>
                <td>
                    <a href="{{ route('albums.edit', $album) }}" type="button" class="btn btn-primary btn-md">Edit</a>
                    <div endpoint="{{ route('albums.delete', $album) }}" class="delete d-inline"></div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
