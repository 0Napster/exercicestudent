<div class="form-group {{$errors->has('email')? 'has-error' : '' }}">
    {!! Form::label('email', 'Email(*):', ['for'=> 'Email'] ) !!}<br>
    {!! Form::email('email', Input::old('email'), ['class'=>'form-control', 'id' => 'Email',]) !!}
    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('username')? 'has-error' : '' }}">
    {!! Form::label('username', 'Username(*):', ['for'=> 'Username'] ) !!}<br>
    {!! Form::text('username', Input::old('username'), ['class'=>'form-control', 'id' => 'Username']) !!}
    {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{$errors->has('message')? 'has-error' : '' }}">
    {!! Form::label('message', 'Message(*):' ) !!}<br>
    {!! Form::textarea('message', Input::old('message')) !!}
    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
    {!! Form::submit('Click Me!', ['class'=>'btn']) !!}
</div>
