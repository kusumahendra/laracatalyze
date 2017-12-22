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
                @slot('title', 'All Users')
                {{-- @slot('footer', 'User Detail') --}}
                @slot('boxTool')
                    {{-- <a href="{{ url('admin/post/create') }}" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-plus"></i> Add new post</a> --}}
                @endslot
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                     <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                    <a href="{{ route('admin.user.destroy', $user) }}" class="btn btn-xs btn-danger" data-method="delete" data-confirm="Are you sure?"><i class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @slot('footerClass' , 'text-right')
                @slot('footer' , $users->links())
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