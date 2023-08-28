@extends('layouts.main')

@section('container')
    <h1>Selamat datang, {{ auth()->user()->name }}</h1>
@endsection