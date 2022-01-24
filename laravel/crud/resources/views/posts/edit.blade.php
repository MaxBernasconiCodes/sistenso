@extends('welcome')
@section('content')
<form action="{{route('posts.update',$post->id)}}" method="post">
@method('PUT')
@csrf
<input class="p-2 m-1 rounded text-black"type="text" name="title" placeholder="Titulo" value={{$post->title}}>
<input class="p-2 m-1 rounded text-black"type="text" name="body"  placeholder="Cuerpo" value={{$post->body}}>
<input class="p-2 m-1 border-2 borded-white rounded text-white"type="submit" value="Actualizar">
</form>
@endsection
