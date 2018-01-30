@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
<h1>Create Blog</h1>
<form class="" action="/blog" method="post">
  <table>
    <tr>
      <td>Title</td>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" rows="8" cols="80"></textarea></td>
    </tr>
    <tr>
      <td>
        {{csrf_field()}}
      </td>
      <td><input type="submit" name="submit" value="create"></td>
    </tr>
  </table>
</form>
@endsection
