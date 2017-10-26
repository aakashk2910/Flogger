<div class="form-group {{ $errors->has('userid') ? 'has-error' : ''}}">
    {!! Form::label('userid', 'Userid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('userid', null, ['class' => 'form-control']) !!}
        {!! $errors->first('userid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('filename') ? 'has-error' : ''}}">
    {!! Form::label('filename', 'Filename', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('filename', null, ['class' => 'form-control']) !!}
        {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mime') ? 'has-error' : ''}}">
    {!! Form::label('mime', 'Mime', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('mime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mime', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('originalfilename') ? 'has-error' : ''}}">
    {!! Form::label('originalfilename', 'Originalfilename', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('originalfilename', null, ['class' => 'form-control']) !!}
        {!! $errors->first('originalfilename', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
