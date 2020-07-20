@extends('layouts.app')
@section('content')
<h1>Публикация статьи</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="" action="{{route('publish')}}" method="post"  style="width: 50%; margin-left: 20%;">
  @csrf
  <div class="form-group">
    <label for="name">Ф.И.О автора</label>
    <select name="name" id="name">
      @foreach($authors as $el)
      <option value="{{$el->authorID}}">{{$el->lastName}} {{$el->firstName}} {{$el->dadName}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group" >
    <label for="title">Заголовок</label>
    <input type="text" class="form-control" name="title" placeholder="Input here" id="title">
  </div>
  <div class="form-group" >
    <label for="anounce">Анонс</label>
    <input type="text" class="form-control" name="anounce" placeholder="Input here" id="anounce">
  </div>
  <div class="form-group">
    <label for="text">Текст</label>
    <textarea name="text" id="text" class="form-control"></textarea>
  </div>
  <div class="form-group">
    @foreach($rubrics as $el)
    <input type="radio" name="rubric" id="{{$el->rubric}}" value="{{$el->rubricID}}">
    <label for="{{$el->rubric}}">{{$el->rubric}}</label>
    @endforeach
  </div>
  <button type="submit" class="btn btn-success">Опубликовать</button>
</form>
@endsection
