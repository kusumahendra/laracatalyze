@extends('layout.backend.master')
@section('content-title')
    Posts
@endsection

@section('backend.content')
<div class="content">
    <form method="post" action="{{ route('admin.post.store') }}">
        {{ csrf_field() }}
        @include('pages.backend.post._form')
    </form>
</div>
@endsection