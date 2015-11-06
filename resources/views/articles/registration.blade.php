@extends('app')


@section('content')

  <h1>Register!</h1>
  {{ $error or '' }}
  <hr/>


  {!! Form::open(['url' => 'user']) !!}
    <div class='form-group'>
      {!! Form::label('un', 'Username:') !!}
      {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class='form-group'>
      {!! Form::label('pw', 'Password:') !!}
      {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
      {!! Form::label('cpw', 'Confirm Password:') !!}
      {!! Form::text('confirmpassword', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
      {!! Form::label('email', 'Email address:') !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
      {!! Form::submit('register', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}


    <a href='/'>already a user?</a>
@stop
