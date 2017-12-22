@extends('layout.backend.master')
@section('content-title')
    Dashboard
@endsection

@section('backend.content')
<div class="content">
    <div class="row">
        <div class="col-md-4">
            @component('layout.backend._box')
                {{-- @slot('bodyClass', 'no-padding') --}}
                @slot('title', 'User Detail')
                {{-- @slot('footer', 'User Detail') --}}
                This is dashboard

            @endcomponent
        </div>
    </div>
</div>
@endsection

@push('footer-scripts')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endpush