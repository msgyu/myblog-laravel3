@extends('layouts.default')
@section('title', 'Edit POST')
@setction('body')
<h1>
  <a href="{{url('/')}}" class="header-menu">BACK</a>
  Edit Post
</h1>
<form  method="post" action="{{url('/posts', $post->id)}}">
  {{ csrf_field()}}
  {{ method_field('patch') }}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title'), $post->title }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errros->first('title')}}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="body enter" cols="30" rows="10" value="{{ old('body') }}"></textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errros->first('body')}}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Update">
  </p>
</form>
@endsection