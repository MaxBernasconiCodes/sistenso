@extends('welcome')
@section('content')

    @forelse ($post->tags as $tag )
        <a class="text-white" href="#">{{$tag->description}}</a>
    @empty

    @endforelse
    <x-post_listing :id="$post->id" :title="$post->title" :body="$post->body" />
    <ul class="m-auto text-white text-decoration-none">
    @forelse ($post->comments as $comment )
       <li>{{$comment->description}}</li>
    @empty

    @endforelse
    </ul>
@endsection
