@extends('app')

@section('content')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->body }}</p>
    <a href="{{ action('ArticlesController@index') }}">Go back to index</a>
@stop