@extends('layouts.main')

@section('header')
    <div class="container mt-5 mb-5">
        <h1 class="text-center">Blog</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        @foreach ($articles as $article)
            <div class="card" style="width: 37rem;">
                <div class="card-body">
                <h3 class="card-title">{{ $article["title"] }}</h3>
                <h6 class="card-subtitle mb-2 text-muted">{{ $article["subtitle"] }}</h6>
                <p class="card-text">{{ Str::substr($article["text"], 0, 50) }}...</p>
                <a href="{{ route('articles.show', $article) }}">Vai all'articolo</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection





