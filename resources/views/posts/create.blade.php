@extends('layouts.default')
@section('title', 'NEW POST')
@setction('body')
<h1>
  <a href="{{url('/')}}" class="header-menu">BACK</a>
  New Post
</h1>
<form  method="post" action="{{url('/posts')}}">
  {{ csrf_field()}}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errros->first('title')}}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body" cols="30" rows="10" value="{{ old('body') }}"></textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errros->first('body')}}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection