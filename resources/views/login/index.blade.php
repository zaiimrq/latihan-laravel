@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto mt-5">
                <form>
                    @if (session()->has('success'))
                        <h1>{{ session('success') }}</h1>
                    @endif
                    <h1 class="h3 mb-3 fw-normal">Please login</h1>
                
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                    <small class="d-block text-center">Belum punya akun ? <a href="/register">Daftar</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection