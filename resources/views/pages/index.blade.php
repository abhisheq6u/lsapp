@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
                <h1>{{ $title }}</h1>
                <p>This is my first laravel application.</p>
                <a class="btn btn-primary btn-lg" href="#">Login</a>
                <a class="btn btn-success btn-lg" href="#">Register</a>
        </div>
@endsection