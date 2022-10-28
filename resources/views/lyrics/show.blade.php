@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">Genre Table
        <a href="{{ route('lyrics.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class=""></i>Create</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Album</th>
                <th scope="col">Band</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach($lyrics as $index => $lyric)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $lyric->album->name }}</td>
                <td>{{ $lyric->band->name }}</td>
                <td>
                    <a href="{{ route('lyrics.edit', $lyric) }}" type="button" class="btn btn-info btn-md">Edit</a>
                    <div endpoint="{{ route('lyrics.delete', $lyric) }}" class="delete d-inline"></div>
                    <a href="{{ route('lyrics.details', $lyric) }}" type="button" class="btn btn-success btn-md">View</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $lyrics->links() }}
    </div>
</div>
@endsection
