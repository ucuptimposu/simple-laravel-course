@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
<h1>Edit Blog</h1>
<form class="" action="/blog/edit/{{$blog->id}}" method="post">
  <table>
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" value="{{$blog->title}}"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" rows="8" cols="80">{{$blog->description}}</textarea></td>
    </tr>
    <tr>
      <td>
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
      </td>
      <td><input type="submit" name="submit" value="edit"></td>
    </tr>
  </table>
</form>
@endsection
