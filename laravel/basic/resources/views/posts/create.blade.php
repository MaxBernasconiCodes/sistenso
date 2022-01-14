@extends('posts.layout')
@section('content')
        <h1>Post: nuevo</h1>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <input type="text" id="title" name="title" class="border-2 rounded text-black-50" placeholder="Titulo">
            @error('title')
            <span class="bg-red-200 bold">{{$message}}</span>
            @enderror
            <input type="text" id="body" name="body"  class="border-2 rounded text-black-50" placeholder="Cuerpo">
            <hr>
            <input type="submit" value="Crear" class="border-2 text-black bg-gray-200 p-2 hover:bg-blue-400 transition-all ease-in-out">
        </form>
@endsection
