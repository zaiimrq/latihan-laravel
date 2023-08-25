
@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-10 text-justify">
            <h1 class="text-center">{{ $post->title }}</h1>
            <small>
                By
                <a href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a>
                In
                <a href="/categories/{{ $post->category->name }}">{{ ucwords($post->category->name) }}</a>
                {{ $post->created_at->diffForHumans() }}
            </small>
            {!! $post->body !!}
            <a href="/posts">Back</a>
        </div>
    </div>
@endsection