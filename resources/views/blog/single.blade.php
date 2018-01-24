<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Hallo Blog</h1>
    <h2> {{ $nilai }} </h2>

    @foreach($users as $user)
    <li>
      {{$user}}
    </li>
    @endforeach

  </body>
</html>
