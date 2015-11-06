@extends('app')


@section('content')

    <h1>{{$article->title}}</h1>


      <article>
          {{ $article->body }}
      </article>
      <h3>by {{$article->username}}</h3>
@stop
