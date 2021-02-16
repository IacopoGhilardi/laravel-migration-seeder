@extends('layouts.main')


@section('content')
    @foreach ($articles as $article)
        <div>
            <h3>{{ $article["title"] }}</h3>
            <p>{{ $article["subtitle"] }}</p>
            <span>{{ $article["author"] }}</span>
            <a href="{{ route('articles.show', $article) }}">Vai all'articolo</a>
        </div>


    @endforeach
@endsection