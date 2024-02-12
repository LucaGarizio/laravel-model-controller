@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container-fluid py-5">
    <h1 class="text-center text-white mb-5">Lista dei Film</h1>
    <div class="row justify-content-center">
       
        @foreach($movies as $movie)
        <div class="col-2 bg-success text-white border mx-2 my-2 " style="height: 200px;">
            <ul class="text-start p-0">
                <li><h5>Nome: {{ $movie->title }}</h5></li>
                <li><h6>Paese: {{ $movie->nationality }}</h6> </li>
                <li><h6>Data: {{ $movie->date }}</h6></li>
                <li><h6>Vote: {{ $movie->vote }}</h6></li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection

