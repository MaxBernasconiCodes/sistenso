@extends('welcome')
@section('content')
<div class=" text-black">
    <a href="{{route('posts.create')}}"><button class=" w-full border-black border-2 bg-white p-2">Nuevo</button></a>
@forelse ($posts as $post)
    <x-postlisting  :id="$post->id" :title="$post->title" :body="$post->body" />
@empty
<p>Sin Registros</p>
@endforelse
</div>
@endsection
