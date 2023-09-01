@extends('dashboard.layouts.main')

@section('header')
    <h2>All Posts By {{ auth()->user()->name }}</h2>
@endsection

@section('container')
<div class="table-responsive small col-lg-8">
  @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
  @endif
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah anda ingin menghapus post?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection