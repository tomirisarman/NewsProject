@extends('layouts.app')
@section('content')
<h1>Добавление автора</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="" action="{{route('create_author')}}" method="post"  style="width: 50%; margin-left: 20%;" enctype="multipart/form-data">
  @csrf
  <div class="form-group" >
    <label for="lastName">Фамилия</label>
    <input type="text" class="form-control" name="lastName" placeholder="Иванов" id="lastName">
  </div>
  <div class="form-group" >
    <label for="firstName">Имя</label>
    <input type="text" class="form-control" name="firstName" placeholder="Иван" id="firstName">
  </div>
  <div class="form-group" >
    <label for="dadName">Отчество</label>
    <input type="text" class="form-control" name="dadName" placeholder="Иванович" id="dadName">
  </div>
  <div class="form-group" >
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="example@gmail.com" id="email">
  </div>
  <div class="form-group" >
    <label for="photo"></label>
    <input type="file" class="form-control" name="photo" id="photo">
  </div>
  <button type="submit" class="btn btn-success">Создать</button>
</form>
@endsection
