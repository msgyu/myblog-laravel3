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
=======
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/styles.css">
  <title>myblog</title>
</head>
<body>
  <header>
  </header>
  <div class="container">
    <h1>Blog Posts</h1>
    <ul>
      @forelse ($posts as $post)
      <li><a href="{{ action('PostsController@show, $post->id'}}">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
  <footer>
    <a href="">これが独立してある。</a>
  </footer>
</body>
</html>
