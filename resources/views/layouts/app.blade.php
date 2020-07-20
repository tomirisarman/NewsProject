<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Новостной каталог API</title>
  </head>
  <body>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Новостной каталог API</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="{{route('home')}}">Главная</a>
          <a class="p-2 text-dark" href="{{route('authors')}}">Все авторы</a>
          <a class="p-2 text-dark" href="{{route('articles')}}">Все новости</a>
          <a class="p-2 text-dark" href="{{route('search_by_rubrics')}}">Новости по рубрикам</a>
          <a class="p-2 text-dark" href="{{route('search_by_authors')}}">Новости по авторам</a>
        </nav>
      </div>
      @yield('content')

  </body>
</html>
