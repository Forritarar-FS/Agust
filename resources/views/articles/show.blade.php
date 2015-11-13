@extends('app')


@section('content')

    <h1>{{$article->title}}</h1>


      <article>
          {{ $article->body }}
          <img src ="uploads/photokalli.file"/>
      </article>

      <h3>by {{$article->username}}</h3>
@endsection
