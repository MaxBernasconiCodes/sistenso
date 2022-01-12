@extends('posts.layout')
@section('content')
        <h1>Post: nuevo</h1>
        <form action="{{route('poststore')}}" method="post">
            @csrf
            <input type="text" id="title" name="title" class="border-2 rounded text-black-50">
            <input type="text" id="body" name="body"  class="border-2 rounded text-black-50">
            <input type="submit" value="Crear">
        </form>
@endsection
