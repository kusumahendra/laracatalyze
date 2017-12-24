@extends('layout.backend.master')
@section('content-title')
    Categories
@endsection

@section('backend.content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
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
                            <th>Slug</th>
                            <th>Total posts</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->posts->count() }}</td>
                                <td>
                                    <a href="#" data-id="{{ $category->id }}" data-name="{{ $category->name }}" class="button-edit btn btn-xs btn-default">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                    <a href="{{ route('admin.category.destroy', $category) }}" class="btn btn-xs btn-danger" data-method="delete" data-confirm="Are you sure?" data-post-count="{{ $category->posts->count() }}"><i class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @slot('footerClass' , 'text-right')
                @slot('footer' , $categories->links())
            @endcomponent
        </div>
        <div class="col-md-4">
            <form id="create-form" method="post" action="{{ route('admin.category.store') }}">
                {{ csrf_field() }}
                @component('layout.backend._box')
                    @slot('title', 'Add New Category')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" autocomplete="off">
                            <input type="hidden" name=id"">
                        </div>
                    @slot('footer')
                        <input type="submit" class="btn btn-primary pull-right" value="Submit">
                    @endslot
                @endcomponent
            </form>
            <form id="edit-form" method="post" action="" class="hide">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                @component('layout.backend._box')
                    @slot('title', '')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" autocomplete="off">
                            <input type="hidden" name=id"">
                        </div>
                    @slot('footer')
                        <input type="submit" class="btn btn-primary pull-right" value="Submit">
                        <a href="#" id="button-edit-cancel" class="btn btn-default pull-right">Cancel edit</a>
                    @endslot
                @endcomponent
            </form>
        </div>
    </div>
</div>
@endsection

@push('footer-scripts')
    <script>
        $(function () {
            $('.button-edit').click(function(){

                id = $(this).data('id');
                name = $(this).data('name');
                url = "{{ route('admin.category.index') }}/"+id;

                $('#edit-form').attr('action', url);
                $('#edit-form .box-title').html('Edit category: '+name);
                $('#edit-form input[name="name"]').val(name);
                $('#edit-form input[name="id"]').val(id);
                $('#create-form').addClass('hide');
                $('#edit-form').removeClass('hide');
            })
            $('#button-edit-cancel').click(function(){
                $('#create-form').removeClass('hide');
                $('#edit-form').addClass('hide');
            })
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endpush