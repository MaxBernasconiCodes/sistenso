<x-app-layout>
<form action="{{route('posts.store')}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="title" placeholder="Titulo" value="{{$post->title}}"  class="rounded border-2 focus:bg-gray-100 ">
    <input type="text" name="body" placeholder="Cuerpo"  value="{{$post->body}}" class="rounded border-2 focus:bg-gray-100 ">
    <input type="submit" value="Crear" class=" rounded border-2 border-blue-100 p-2 bg-gray-200">
</form>
</x-app-layout>
