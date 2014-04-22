@section('content')

<h1>Laravel Forum <small>Please securely login below</small></h1>

{{ Form::open(array('class' => 'form-horizontal')) }}

<div class="form-group">
    {{ Form::label('email', 'Email Address', array('class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-10">
        {{ Form::input('email', 'email', null, array('class' => 'form-control', 'placeholder' => 'john.smith@laravelforum.com')) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-10">
        {{ Form::input('password', 'password', null, array('class' => 'form-control', 'placeholder' => 'Password')) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ Form::submit('Secure Login', array('class' => 'btn btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop