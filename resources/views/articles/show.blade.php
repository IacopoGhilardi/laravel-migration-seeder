@extends('layouts.main')

@section('header')
    <div class="container mt-5">
        <h1 class="text-center">{{ $article->title }}</h1>
    </div>
@endsection

@section('content')
    <div class="container">  
        <p class="text-center">{{ $article->subtitle }}</p>
        <article>{{ $article->text }}</article>
        <div class="d-flex justify-content-between mt">
            <span>{{ $article->author }}</span>
            <span class="text-right">{{ $article->publication_date }}</span>
        </div>
    </div>

@endsection