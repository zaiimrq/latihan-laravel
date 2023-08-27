@extends('layouts.main')

@section('container')
    <div class="row">
        <h1 class="text-center">{{ $title }}</h1>

            <div class="d-flex justify-content-center">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input type="text" name="search" value="{{ request('search') }}">
                    <button type="submit">search</button>
                </form>
            </div>
        @if ($posts->count())
            @foreach ($posts as $post)    
                <article class="mt-4 border-bottom">
                    <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
                    <small>
                        By
                        <a href="/posts?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                        In
                        <a href="/posts?category={{ $post->category->slug }}">{{ ucwords($post->category->name) }}</a>
                    </small>
                    <p>{{ $post->excerpt }}</p>
                </article>
            @endforeach
            @if (request('category') || request('author'))
                <a href="/posts">Back</a>
            @endif
    </div>
        {{ $posts->links() }}
        @else
            <h1>No Post Found !</h1>
        @endif
@endsection
