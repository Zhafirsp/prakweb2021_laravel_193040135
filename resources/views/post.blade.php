@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title}}</h2>
  <h5>By: {{ $post->author}}</h5>
  <br>
  {!! $post->body !!}
</article>
    
<a href="/blog">Back to Blog</a>
@endsection