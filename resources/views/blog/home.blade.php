@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
<h1>Selamat Datang</h1>
<p>Selamat datang di Blog ogud</p>

@foreach ($blogs as $blog)
    <li><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></li>
@endforeach

@endsection
