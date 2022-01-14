@extends('posts.layout')
@section('content')
        <h1>Post: {{$post->id}}</h1>
        <form action="{{route('posts.update',$post->id)}}" method="POST">
            @method('PUT')
            @csrf
            <input value="{{$post->title}}" type="text" id="title" name="title" class="border-2 rounded text-black-50" placeholder="Titulo">
            @error('title')
            <span class="bg-red-200 bold">{{$message}}</span>
            @enderror
            <input value="{{$post->body}}" type="text" id="body" name="body"  class="border-2 rounded text-black-50" placeholder="Cuerpo">
            <hr>
            <input type="submit" value="Guardar" class="border-2 text-black bg-gray-200 p-2 hover:bg-blue-400 transition-all ease-in-out">
        </form>
@endsection
