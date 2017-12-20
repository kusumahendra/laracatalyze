@extends('layout.backend.master')
@section('content-title')
    Categories
@endsection

@section('backend.content')
<div class="content">
    <div class="row">
        <div class="col-md-6">
            @component('layout.backend._box')
                {{-- @slot('bodyClass', 'no-padding') --}}
                @slot('title', 'All Categories')
                {{-- @slot('footer', 'User Detail') --}}
                @slot('boxTool')
                    {{-- <a href="{{ url('admin/post/create') }}" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-plus"></i> Add new post</a> --}}
                @endslot
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>slug</th>
                            <th>tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="{{ url('admin/post/'.$category->id.'/edit/') }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                    <a href="{{ url('admin/post/'.$category->id.'/delete/') }}" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @slot('footerClass' , 'text-right')
                @slot('footer' , $categories->links())
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