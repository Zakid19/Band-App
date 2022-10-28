@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">Band Table
        <a href="{{ route('bands.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class=""></i>Create</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach($bands as $index => $band)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $band->name }}</td>
                <td>
                    <img src="{{ Storage::url($band->thumbnail) }}" width="150px" height="100px" class="img-fluid rounded" alt="">
                </td>
                <td>{{ $band->genres()->get()->implode('name', ', ') }}</td>
                <td>
                    <a href="{{ route('bands.edit', $band) }}" type="button" class="btn btn-primary btn-md">Edit</a>
                    <div endpoint="{{ route('bands.delete', $band) }}" class="delete d-inline"></div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
