@extends('posts.layout')
@section('content')
        <h1>Posts</h1>
        @if(isset($posts))
            @forelse ($posts as $post )
            <p>{{$post->title}}</p>
            @empty
            <h2>No hay registros</h2>
            @endforelse
        @else
            <p>Data no esta seteado: fijate si pasas por ruta de web</p>
        @endif
@endsection
