<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blogger</title>
  </head>
  <body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-4">
      <ul class="flex items-center ">
        <li><a class="p-3" href="/">Home</a></li>
        <li><a class="p-3" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a class="p-3" href="{{ route('posts') }}">Post</a></li>
      </ul>
      <ul class="flex items-center">
      @auth
            <li><a class="p-3" href="">{{ auth()->user()->name }}</a></li>
            <form class="p-3 inline" action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" href="{{ route('logout') }}">Logout</button>
            </form>
      @endauth
      @guest
            <li><a class="p-3" href="{{ route('login') }}">Sign In</a></li>
            <li><a class="p-3" href="{{ route('register') }}">Register</a></li>
      @endguest
      </ul>
    </nav>
      @yield('content')
  </body>
</html>
