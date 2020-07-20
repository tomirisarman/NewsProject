@extends('layouts.app')
@section('content')
<h1>Рубрики</h1>

<ul>
  @foreach($rubrics as $el)
  <li><a href="{{route('rubric_article', $el->rubricID)}}">{{$el->rubric}}</a></li>
  @endforeach
</ul>




@endsection
