@extends('app')

@section('content')
    <h2>Create new article</h2>
    
    <hr/>
    
    {!! Form::open([ 'action' => 'ArticlesController@index']) !!}
        <div class="form-horizontal">
            
            <div class="form-group">
                {!! Form::label('title', 'Title', [ 'class' => 'col-sm-2 control-label' ]) !!}
                <div class="col-sm-10">
                    {!! Form::text('title', null, [ 'class' => 'form-control' ]) !!}    
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('body', 'Body', [ 'class' => 'col-sm-2 control-label' ]) !!}
                <div class="col-sm-10">
                    {!! Form::textarea('body', null, [ 'class' => 'form-control' ]) !!}
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('published_at', 'Publish Date', [ 'class' => 'col-sm-2 control-label' ]) !!}
                <div class="col-sm-10">
                    {!! Form::input('date', 'published_at', date('Y-m-d'), [ 'class' => 'form-control' ]) !!}
                </div>
            </div>
            
            <div class="col-sm-offset-2">
                {!! Form::submit('Add article', [ 'class' => 'btn btn-primary' ]) !!}  
            </div>
            
        </div>
    {!! Form::close() !!}
    <hr/>
@stop