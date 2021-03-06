<x-app-layout>
    <ul class="flex flex-col  ">
        @forelse ($posts as $post )
            <li class="flex justify-evenly p-2 m-1 reunded shadow odd:bg-blue-100 even:bg-red-300">
                <p>{{$post->title}}
                :
                {{$post->body}}</p>
                <a href="{{route('posts.edit', $post->id)}}" class="border-black border-2 p-2 bg-green-400 hover:bg-gray-600 hover:shadow"> editar </a>
                <a href="{{route('posts.show', $post->id)}}" class="border-black border-2 p-2 bg-blue-400 hover:bg-gray-600 hover:shadow"> Ver </a>

                <form
                action="{{route('posts.destroy',$post->id)}}"
                method="POST"
                >
                @method('DELETE')
                @csrf
                <input type="submit" value="Eliminar" class="border-black border-2 p-2 bg-gray-400 hover:bg-gray-600 hover:shadow">
                </form>
            </li>
        @empty
         <h2>No hay nada</h2>
        @endforelse
    </ul>

</x-app-layout>
