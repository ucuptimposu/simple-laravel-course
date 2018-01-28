@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
    <h1>Hallo Blog</h1>
    <h2>{{$blog->title}}</h2>
    <hr>
    <p>{{$blog->description}}</p>
@endsection
