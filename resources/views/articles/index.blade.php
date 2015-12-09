@extends('app')


@section('content')

    <h1>Welcome to the board</h1><h4><a href='/articles/create'>Create a post</a></h4><h3><a href='/'>back to the mainpage</a></h3>

    <hr/>

    @foreach ($articles as $article)

      <article>

          <h2>
              <a href="{{ url('/articles', $article->id)}}"{{ $article->title }}</a>
          </h2>


          <div class='title'>{{ $article->title }}</div>
      </article>

    @endforeach
@stop
