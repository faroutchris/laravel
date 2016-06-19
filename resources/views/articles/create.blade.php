@extends('app')

@section('content')
    <h2>Create new article</h2>
    
    <hr/>
    
    {!! Form::open([ 'action' => 'ArticlesController@index']) !!}
        @include( 'articles._form', ['submitBtnText' => 'Add Article', 'defaultDate' => date('Y-m-d')] )
    {!! Form::close() !!}
    
    <hr/>
@stop