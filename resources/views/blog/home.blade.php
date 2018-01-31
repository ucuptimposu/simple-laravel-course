@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
<h1>Selamat Datang</h1>
<p>Selamat datang di Blog ogud</p>

@foreach ($blogs as $blog)
    <li>
      <a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a>
      <form class="" action="/blog/delete/{{ $blog->id }}" method="post">
                {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete">
            <input type="submit" name="submit" value="Delete">
      </form>
    </li>
@endforeach

@endsection
