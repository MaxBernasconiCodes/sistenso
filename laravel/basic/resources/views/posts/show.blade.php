@extends('posts.layout')
@section('content')
        <h1>Post: {{$post['title']}}</h1>
        <hr>
            <p>{{$post->body}}</p>
@endsection
