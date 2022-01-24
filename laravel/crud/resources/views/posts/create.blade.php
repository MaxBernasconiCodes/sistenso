@extends('welcome')
@section('content')
<form action="{{route('posts.store')}}" method="post">
@csrf
<input class="p-2 m-1 rounded text-black"type="text" name="title" placeholder="Titulo">
<input class="p-2 m-1 rounded text-black"type="text" name="body"  placeholder="Cuerpo">
<input class="p-2 m-1 border-2 borded-white rounded text-white"type="submit" value="Enviar">
</form>
@endsection
