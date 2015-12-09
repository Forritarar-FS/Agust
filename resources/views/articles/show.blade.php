@extends('app')


@section('content')

    <h1>{{$article->title}}</h1>


      <article>
          {{ $article->body }}

      </article>
      <img src={{asset('uploads/' . $article->id . $article->username)}} alt="Logo">

      <h3>by {{$article->username}}</h3>
@endsection
