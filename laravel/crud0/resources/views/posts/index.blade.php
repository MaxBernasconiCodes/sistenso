<x-app-layout>
    <ul>
        @forelse ($posts as $post )
            <li>
                {{$post->title}}
                :
                {{$post->body}}
                <form
                action="{{route('posts.destroy',$post->id)}}"
                method="POST"
                >
                @method('DELETE')
                @csrf
                <input type="submit" value="Eliminar">
                </form>
            </li>
        @empty
         <h2>No hay nada</h2>
        @endforelse
    </ul>

</x-app-layout>
