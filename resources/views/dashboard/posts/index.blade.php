@extends('dashboard.layouts.main')

@section('header')
    <h2>All Posts By {{ auth()->user()->name }}</h2>
@endsection

@section('container')
<div class="table-responsive small col-lg-8">
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
                <td>view</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection