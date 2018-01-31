@extends('layout.master')

@section('title', 'My Best Blog')

@section('content')
  {{-- @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  @endif --}}
<h1>Create Blog</h1>
<form class="" action="/blog" method="post">
  <table>
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" value="{{ old('title') }}"></td>
      <td>
        @if ($errors->has('title'))
          {{ $errors->first('title') }}
        @endif
      </td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" rows="8" cols="80">{{ old('description') }}</textarea></td>
      <td>
        @if ($errors->has('description'))
          {{ $errors->first('description') }}
        @endif</td>
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
