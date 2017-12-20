@extends('layout.backend.master')
@section('content-title')
    Posts
@endsection

@section('backend.content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            @component('layout.backend._box')
                {{-- @slot('bodyClass', 'no-padding') --}}
                @slot('title', 'All Posts')
                {{-- @slot('footer', 'User Detail') --}}

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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