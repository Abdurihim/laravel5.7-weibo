<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{mix("css/app.css")}}">
  <title>@yield('title',"Weibo app")-laravel新手入门教程</title>
</head>
<body>
@include('layouts._header')
<div class="container">
  <div class="offset-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
