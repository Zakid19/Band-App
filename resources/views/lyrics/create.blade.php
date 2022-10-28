@extends('layouts.admin')
@push('scripts')
@endpush

@section('content')
    <div id="create-lyric" endpoint="{{ route('lyrics.create') }}"></div>
@endsection
