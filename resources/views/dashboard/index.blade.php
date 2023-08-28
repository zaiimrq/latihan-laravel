@extends('dashboard.layouts.main')

@section('header')
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
@endsection