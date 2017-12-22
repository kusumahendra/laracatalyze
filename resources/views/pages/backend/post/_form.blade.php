@if (URL::current() == url('admin/post/create'))
@elseif (URL::current() == url('admin/post/edit'))
@endif
<div class="row">
	<div class="col-md-8">
		 @component('layout.backend._box')
            @slot('title', 'Create new post')
            <div class="form-group">
            	<label for="">Title</label>
            	<input name="title" type="text" class="form-control"  placeholder="Post title" autocomplete="off"
            	value="{{ old('title') ?: (isset($post->title) ? $post->title : '') }}">
            </div>

            <div class="form-group">
            	<label for="">Slug</label>
            	<input type="text" class="form-control" id="exampleInputEmail1" disabled autocomplete="off">
            </div>

            <div class="form-group">
				<label for="">Excerpt</label>
				<textarea name="excerpt" class="form-control" placeholder="Excerpt" cols="30" rows="5">{{ old('excerpt') ?: (isset($post->excerpt) ? $post->excerpt : '') }}</textarea>
            </div>

            <div class="form-group">
				<label for="">Content</label>
				<textarea id="content-textarea" name="content" class="form-control" placeholder="Excerpt" cols="30" rows="40">{{ old('content') ?: (isset($post->content) ? $post->content : '') }}</textarea>
            </div>
        @endcomponent
	</div>
	<div class="col-md-4">
		@component('layout.backend._box')
			@slot('title', 'Post Meta')
			<div class="form-group">
				<label for="">User</label>
				<select name="user_id" id="" class="form-control select2">
					<option value=""></option>
					@foreach ($users as $user)
						<option value="{{ $user->id }}">{{ $user->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control select2">
					<option value=""></option>
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Tags / Topics</label>
				<select name="tags[]" id="" class="form-control select2" multiple="multiple">
					@foreach ($tags as $tag)
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Featured image</label>
				<div class="input-group">
					<input id="thumbnail" class="form-control" type="text" name="featured_image"
					value="{{ old('featured_image') ?: (isset($post->featured_image) ? $post->featured_image : '') }}">
					<span class="input-group-btn">
						<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
							<i class="fa fa-picture-o"></i> Choose
						</a>
					</span>
				</div>
			</div>
			<img id="holder" style="margin-top:15px;max-height:100px;">
			@slot('footer')
			<input type="submit" class="btn btn-primary pull-right" value="Submit">
			@endslot
		@endcomponent
	</div>
</div>
@push('header-scripts')
	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/select2/dist/css/select2.min.css') }}">
@endpush
@push('footer-scripts')
	<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
	<script src="{{ asset('assets/adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js'></script>

	<script>
		$(function(){
			$('#lfm').filemanager('image');
			$('.select2').select2();
			var options = {
			    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
			    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='+'{{ csrf_token() }}',
			    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
			    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='+'{{ csrf_token() }}'
			  };
			CKEDITOR.replace( 'content-textarea', options );
			{{-- console.log({!! $categories->pluck('id')->toArray() !!}); --}}
			@if ( isset($post->user->id) )
				$('select[name="user_id"]').val('{{ $post->user->id }}').trigger('change');
			@endif
			@if ( isset($post->category->id) )
				$('select[name="category_id"]').val('{{ $post->category->id }}').trigger('change');
			@endif
			@if (isset($post->tags))
				var oldTags = [];
				@foreach ($post->tags as $tag)
					oldTags.push({{ $tag->id }});
				@endforeach
				console.log(oldTags);
				$('select[name="tags[]"]').val(oldTags).trigger('change');
			@endif
		})
	</script>

@endpush



