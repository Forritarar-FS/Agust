@extends('app')


@section('content')

  <h1>Post a card for sale</h1>


    <hr/>


    {!! Form::open(['url' => 'articles', 'files' => true]) !!}
      <div class='form-group'>
        {!! Form::label('title', 'The name of the card you wish to sell[WTS] or buy[WTB]') !!}<br>
        {!! Form::text('title', null, ['class' => 'form-control']) !!}<br>
        {!! Form::label('body', 'Description/Quality:') !!}<br>
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}<br>
        {!! Form::label('txt', 'Add a picture') !!}<br>
        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
      </div>
    <div class='form-group'>

    </div>

      <div class='form-group'>
        <br>{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
      </div>
    {!! Form::close() !!}
@stop
