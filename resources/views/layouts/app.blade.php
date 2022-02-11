<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{csrf_token()}}">

  <title>@yield('title','Larabbs') - laravel进阶教程</title>
  <meta name="description" content="@yield('description','LaraBBS 爱好者社区')">
  <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="/css/mycss.css">
  @yield('styles')
</head>
<body>
  <div class="{{route_class()}}-page" id="app">
    @include('layouts._header')
    <div class="container">
      @include('shared._messages')
      <!-- 占块区域 -->
      @yield('content')
    </div>
    @include('layouts._footer')
  </div>
  <!-- Script -->
  <script src="{{mix('js/app.js')}}"></script>
  @yield('scripts')
</body>
</html>
