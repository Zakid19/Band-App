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
                <div class="card-header">Create Band</div>
                <div class="card-body">
                    <form action="{{ route('bands.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail</label>
                            <input class="form-control" name="thumbnail" type="file" id="thumbnail">
                            @error('thumbnail')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name" multiple="multiple" value="{{ old('name') }}">
                            @error('name')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="genres" class="form-label">Genre</label>
                            <select class="form-select select2 m-b-10 select2-multiple select2-hidden-accessible" name="genres[]" id="genres" multiple="">
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
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
