<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Document </title>
  </head>
  <body>
    <div class='container'>

      @if (Auth::check())
      <p>{{Auth::user()->name}}</p>
        <a href='/logout'> Log out </a>
        <hr/>
      @endif
      @yield('content')
    </div>


  </body>
</html>
