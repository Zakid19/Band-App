@extends('layouts.admin')
@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('lyrics.edit', $lyric) }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class=""></i>Edit</a></div>
            <div class="card-body">
                <h4 class="card-title">{{ $titleLyric }}</h4>
                <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                    <div class="card m-b-0">
                        <div id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11">
                            <div class="card-body">
                                {{ $lyric->body }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
