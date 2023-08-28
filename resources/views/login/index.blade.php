@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session()->has('success'))        
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto mt-5">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please login</h1>
                
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus required >
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                    <small class="d-block text-center">Belum punya akun ? <a href="/register">Daftar</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection