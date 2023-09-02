@extends('dashboard.layouts.main')

@section('header')
    <h2>All Category</h2>
@endsection

@section('container')
<div class="table-responsive small col-lg-6">
  @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
  @endif
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped col-lg-6">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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