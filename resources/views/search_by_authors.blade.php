@extends('layouts.app')
@section('content')
<h1>Авторы</h1>

<ul>
  @foreach($authors as $el)
  <li><a href="{{route('author_article', $el->authorID)}}">{{$el->lastName}} {{$el->firstName}} {{$el->dadName}}</a></li>
  @endforeach
</ul>

@endsection
