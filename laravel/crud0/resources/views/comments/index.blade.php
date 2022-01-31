<x-app-layout>
    <ul class="flex flex-col  ">
        @forelse ($comments as $comment )
            <li class="flex justify-evenly p-2 m-1 reunded shadow odd:bg-blue-100 even:bg-red-300">
                <p>{{$comment->title}}
                :
                {{$comment->body}}</p>
                <a href="{{route('comments.edit', $comment->id)}}" class="border-black border-2 p-2 bg-green-400 hover:bg-gray-600 hover:shadow"> editar </a>
                <a href="{{route('comments.show', $comment->id)}}" class="border-black border-2 p-2 bg-blue-400 hover:bg-gray-600 hover:shadow"> Ver </a>

                <form
                action="{{route('comments.destroy',$comment->id)}}"
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
