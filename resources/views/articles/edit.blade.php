@extends('app')

@section('content')
    <h2>Edit article: {{$article->title}}</h2>
    
    <hr/>
    
    {!! Form::model($article, [ 'method' => 'PATCH',  'action' => ['ArticlesController@update', $article->id] ]) !!}
        
        @include( 'articles._form', [
            'submitBtnText' => 'Update Article', 
            'defaultDate' => $article->published_at->format('Y-m-d')
        ])
        
    {!! Form::close() !!}
    
    <hr/>
@stop