@extends('posts.layout')
@section('content')
        <h1>Post: {{$post->title}}</h1>
        <hr>
            <p>{{$post->body}}</p>
        <hr>
        <x-comentform postid="{{$post->id}}" />
            <hr>
            <ul>
            @forelse ($post->comments as $comment )
            <li>{{$comment->descripcion . ' / ' . $comment->post->id}}</li>
            @empty
            <li>Sin comentarios</li>
            @endforelse
          </ul>
@endsection
