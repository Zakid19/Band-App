@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">Genre Table
        <a href="{{ route('genres.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class=""></i>Create</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach($genres as $index => $genre)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $genre->name }}</td>
                <td>
                    <a href="{{ route('genres.edit', $genre) }}" type="button" class="btn btn-primary btn-md">Edit</a>
                    <div endpoint="{{ route('genres.delete', $genre) }}" class="delete d-inline"></div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $genres->links() }}
    </div>
</div>
@endsection
