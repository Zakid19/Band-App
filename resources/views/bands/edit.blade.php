@extends('layouts.admin')
@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush

@section('content')
            <div class="card">
                <div class="card-header">New Band</div>
                <div class="card-body">
                    <form action="{{ route('bands.update', $band) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail</label>
                            <div class="div mb-2">
                                <img src="{{ Storage::url($band->thumbnail) }}" alt="" class="img-fluid rounded" width="25%">
                            </div>
                            <input class="form-control" name="thumbnail" type="file" id="thumbnail">
                            @error('thumbnail')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name" multiple="multiple" value="{{ old('name', $band->name)  }}">
                            @error('name')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="genres" class="form-label">Genre</label>
                            <select class="form-select select2" name="genres[]" id="genres" multiple>
                                @foreach($genres as $genre)
                                    <option {{ $band->genres()->find($genre->id) ? 'selected' : '' }} value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                              </select>
                              @error('genres')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
@endsection
