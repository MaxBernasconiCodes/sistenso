<x-app-layout>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titulo"  class="rounded border-2 focus:bg-gray-100 ">
    <input type="text" name="body" placeholder="Cuerpo"  class="rounded border-2 focus:bg-gray-100 ">
    <input type="submit" value="Crear" class=" rounded border-2 border-blue-100 p-2 bg-gray-200">
</form>
</x-app-layout>
