@extends('dashboard.layouts.main')

@section('container')
    <div class="row mb-5">
        <div class="col-md-8 text-justify">
            <h1 class="text-center">{{ $post->title }}</h1>
            <div class="mb-3">
                <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span></a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span></a>
            </div>
            {!! $post->body !!}
        </div>
    </div>
@endsection