<x-app-layout>
<form action="{{route('posts.update',$post->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="title" placeholder="Titulo" value="{{$post->title}}"  class="rounded border-2 focus:bg-gray-100 ">
    <input type="text" name="body" placeholder="Cuerpo"  value="{{$post->body}}" class="rounded border-2 focus:bg-gray-100 ">
    <input type="submit" value="Guardar" class=" rounded border-2 border-blue-100 p-2 bg-green-400">
</form>
</x-app-layout>
