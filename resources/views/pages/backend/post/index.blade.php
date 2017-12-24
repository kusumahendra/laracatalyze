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
                @slot('boxTool')
                    <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-plus"></i> Add new post</a>
                @endslot
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Date created</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->name }},
                                    @endforeach
                                </td>
                                <td>{{ Carbon\Carbon::parse($post->created_at)->format('d F Y H:i')  }}</td>
                                <td>
                                    <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                    <a href="{{ route('admin.post.destroy', $post) }}" class="btn btn-xs btn-danger" data-method="delete" data-confirm="Are you sure?"><i class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @slot('footerClass' , 'text-right')
                @slot('footer' , $posts->links())
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