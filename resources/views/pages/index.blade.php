@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Lista dei Film</h1>
<ul>
    @foreach($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
</ul>
</body>
@endsection
