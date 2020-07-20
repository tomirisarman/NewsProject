@extends('layouts.app')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Свежие новости мира</h1>
  <p class="lead">Достоверно. Удобно. Доступно.</p>
  <a href="{{route('add_article')}}"><button class="btn btn-primary" type="button" name="button">Добавить статью</button></a>
  <a href="{{route('add_author')}}"><button class="btn btn-primary" type="button" name="button">Добавить автора</button></a>
  <a href="{{route('add_rubric')}}"><button class="btn btn-primary" type="button" name="button">Добавить рубрику</button></a>
</div>
@endsection
