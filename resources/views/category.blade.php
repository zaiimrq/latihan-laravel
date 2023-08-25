@extends('layouts.main')
@section('container')
    <div class="row">
        <h1>{{ $title }}</h1>
        @foreach ($posts as $post)
            <ul>
                <li>
                    <a href="/posts?category={{ $post->slug }}">{{ ucwords($post->name) }}</a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection