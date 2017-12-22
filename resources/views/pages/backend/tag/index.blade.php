@extends('layout.backend.master')
@section('content-title')
    Tags
@endsection

@section('backend.content')
<div class="content">
    <div class="row">
        <div class="col-md-6">
            @component('layout.backend._box')
                @slot('title', 'All Tags')
                @slot('boxTool')
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
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>
                                    <a href="#" data-id="{{ $tag->id }}" data-name="{{ $tag->name }}" class="button-edit btn btn-xs btn-default">
                                        <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                    <a href="{{ route('admin.category.destroy', $tag) }}" class="btn btn-xs btn-danger" data-method="delete" data-confirm="Are you sure?"><i class="fa fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @slot('footerClass' , 'text-right')
                @slot('footer' , $tags->links())
            @endcomponent
        </div>
        <div class="col-md-6">
            <form id="create-form" method="post" action="{{ route('admin.tag.store') }}">
                {{ csrf_field() }}
                @component('layout.backend._box')
                    @slot('title', 'Add New Tag')
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
                url = "{{ route('admin.tag.index') }}/"+id;
                $('#edit-form').attr('action', url);
                $('#edit-form .box-title').html('Edit tag: '+name);
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