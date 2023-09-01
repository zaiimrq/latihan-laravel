@extends('dashboard.layouts.main')

@section('container')
    <div class="row mb-5">
        <div class="col-md-8 text-justify">
            <h1 class="text-center">{{ $post->title }}</h1>
            <div class="mb-3">
                <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah anda ingin menghapus post?')"><span data-feather="trash-2"></span></button>
                  </form>
            </div>
            {!! $post->body !!}
        </div>
    </div>
@endsection