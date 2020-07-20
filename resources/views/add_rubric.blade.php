@extends('layouts.app')
@section('content')
<h1>Добавление рубрики</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="" action="{{route('create_rubric')}}" method="post"  style="width: 50%; margin-left: 20%;" enctype="multipart/form-data">
  @csrf
  <div class="form-group" >
    <label for="rubric">Назовите рубрику</label>
    <input type="text" class="form-control" name="rubric" placeholder="" id="rubric">
  </div>
  <button type="submit" class="btn btn-success">Создать</button>
</form>
@endsection
