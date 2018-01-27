@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
    <h1>Hallo Blog</h1>
    <h2> {{ $nilai }} </h2>

    @foreach($users as $user)
    <li>
      {{$user -> username .' '. $user -> password}}
    </li>
    @endforeach

    {!! $unescape !!}

    @if(count($users) > 5)
      <p>User lebih dari lima</p>
    @else
      <p>User tidak lebih dari lima</p>
    @endif

@endsection
