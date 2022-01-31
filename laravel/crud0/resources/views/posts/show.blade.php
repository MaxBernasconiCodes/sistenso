<x-app-layout>
<div>
    <input disabled type="text" name="title" placeholder="Titulo" value="{{$post->title}}"  class="rounded border-2 focus:bg-gray-100 ">
    <input disabled type="text" name="body" placeholder="Cuerpo"  value="{{$post->body}}" class="rounded border-2 focus:bg-gray-100 ">
</div>
</x-app-layout>
