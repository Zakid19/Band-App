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
                <div class="card-header">Lyric Edit</div>
                <div class="card-body">
                    <form action="{{ route('lyrics.update', $lyric) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" id="title" multiple="multiple" value="{{ old('name', $lyric->title) }}">
                            @error('title')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <input class="form-control" type="text" name="body" id="body" multiple="multiple" value="{{ old('body', $lyric->body) }}">
                            @error('body')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
@endsection
