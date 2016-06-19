@extends('app')

@section('content')

@foreach($articles as $article)
    <a href="{{ action('ArticlesController@show', [$article->id]) }}">
        <h2>{{ $article->title }}</h2>
    </a>
@endforeach

@stop