@extends('app')


@section('content')

  <h1>Welcome</h1>
  <h3><a href='/articles'>To the board</a></h3>
  <h4><a href='/auth/logout'>Logout</a> | <a href='/auth/login'>log in</a></h4>
  {{ $error or '' }}
  {{ $loggedin or '' }}

    <a href='/auth/register'>Register</a>
@stop
