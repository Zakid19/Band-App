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
                <div class="card-header">Create Album</div>
                <div class="card-body">
                    <form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name" multiple="multiple" value="{{ old('name') }}">
                            @error('name')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="band" class="form-label">Band</label>
                            <select class="form-select select2" name="band" id="band" multiple>
                                @foreach($bands as $band)
                                    <option value="{{ $band->id }}">{{ $band->name }}</option>
                                @endforeach
                              </select>
                              @error('band')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <select class="form-select select2" name="year" id="year" multiple>
                                <option disabled selected>Choose a Year</option>
                                @for($i = 1990; $i <= 2022; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                              </select>
                              @error('year')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
@endsection
