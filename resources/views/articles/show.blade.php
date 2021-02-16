@extends('layouts.main')


@section('content')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->subtitle }}</p>
    <article>{{ $article->text }}</article>
    <span>{{ $article->author }}</span>
    <span>{{ $article->publication_date }}</span>
@endsection