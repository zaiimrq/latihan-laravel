@extends('dashboard.layouts.main')

@section('header')
    <h1 class="h2">Create New Post</h1>
@endsection
@section('container')
    <div class="row mb-5">
        <form action="/dashboard/posts" method="post" class="col-lg-8" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')<div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" id="category">
                    @foreach ($categories as $category)
                        @if (old("category_id") == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                @error('image') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body') <p class="text-danger">{{ $message }}</p> @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener('change', function () {
            fetch('/dashboard/posts/slug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection