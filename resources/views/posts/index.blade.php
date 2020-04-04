@extends('layouts.default')
@section('title', 'Blog Posts')
@section('content')
<h1>
  <a href="{{url('/posts/create')}}" class="header-menu">new-post</a>
  Blog Posts
</h1>
<ul>
  @forelse ($posts as $post)
  <li><a href="{{ action('PostsController@show, $post'}}">{{ $post->title }}</a></li>
  <li><a href="{{ action('PostsController@edit, $post'}}" class="edit">Edit</a></li>
  <li><a href="{{ action('PostsController@show, $post'}}" class="del">x</a></li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection