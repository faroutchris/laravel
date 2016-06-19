@extends('app')

@section('content')

@foreach($articles as $article)
    <h2>
        <a href="{{ action('ArticlesController@show', [$article->id]) }}">
            {{ $article->title }}
        </a>
    </h2>
@endforeach

@stop