@if ( $errors->has($field) )
<div class="col-sm-10 col-sm-offset-2">
    <p class="alert alert-danger">{{ $errors->first($field) }}</p>
</div>
@endif