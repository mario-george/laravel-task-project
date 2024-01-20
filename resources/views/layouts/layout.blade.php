<!DOCTYPE html>
<html>

<head>
  <title>Laravel 10 Task List App</title>
  @yield('style')
</head>

<body>
  <h1>@yield('title')</h1>
  @if(session()->has('success'))
  <p>{{session('success')}}</p>
  @endif
  <div>
    @yield('content')
  </div>
</body>

</html>
