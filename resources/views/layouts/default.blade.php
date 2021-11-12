<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')


<div class="container">
  <div class="offset-md-1 col-md-10">
    @yield('content')
    {{--占位符，用@section（‘content’）来展示--}}
    @include('layouts._footer')
  </div>

</div>
</body>
</html>


