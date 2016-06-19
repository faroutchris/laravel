<div class="form-horizontal">
    
    <div class="form-group">
        @include('errors.formfielderror', ['field' => 'title'])
        
        {!! Form::label('title', 'Title', [ 'class' => 'col-sm-2 control-label' ]) !!}
        <div class="col-sm-10">
            {!! Form::text('title', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    
    <div class="form-group">
        @include('errors.formfielderror', ['field' => 'body'])
        
        {!! Form::label('body', 'Body', [ 'class' => 'col-sm-2 control-label' ]) !!}
        <div class="col-sm-10">
            {!! Form::textarea('body', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    
    <div class="form-group">
        @include('errors.formfielderror', ['field' => 'published_at'])
        
        {!! Form::label('published_at', 'Publish Date', [ 'class' => 'col-sm-2 control-label' ]) !!}
        <div class="col-sm-10">
            {!! Form::input('date', 'published_at', $defaultDate, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    
    <div class="col-sm-offset-2">
        {!! Form::submit( $submitBtnText, [ 'class' => 'btn btn-primary' ] ) !!}  
    </div>
    
</div>