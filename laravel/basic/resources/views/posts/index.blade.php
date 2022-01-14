@extends('posts.layout')
@section('content')
        <h1>Posts</h1>
        @if(isset($posts))
        <ul>
            @forelse ($posts as $post )
            <li class="border-2 p-2 flex">
                <p>{{$post->title}}</p>
                <a href="{{route('posts.show',$post->id)}}" class="border-4 border-blue-900 bg-black text-gray-50 rounded px-2 py-1">Mas</a>
                <a href="{{route('posts.edit',$post->id)}}" class="border-4 border-green-900 bg-black text-gray-50 rounded px-2 py-1">Editar</a>
                <form method="POST" action="{{route('posts.destroy',$post->id)}}" class="flex">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="border-4 border-red-900 bg-black text-gray-50 rounded px-2 py-1">
                </form>
            </li>
            @empty
            <h2>No hay registros</h2>
            @endforelse
        </ul>
        @else
            <p>Data no esta seteado: fijate si pasas por ruta de web</p>
        @endif

@endsection
