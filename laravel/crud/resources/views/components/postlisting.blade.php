<div class="w-2/3 m-auto my-2 border-2 rounded bg-gray-100 p-2 ">
    <div>
        <h3 class=" bolder text-lg">{{$title}}</h3>
    </div>
    <hr>
    <div>
        <p>{{$body}}</p>
    </div>
    <hr>
    <div class="flex flex-row">
        <a href="{{route('posts.show',$id)}}"
        class=" shadow-lg rounded border-2 bg-blue-800  ease-in-out transition-all duration-200 active:scale-90 hover:bg-blue-600 hover:text-black w-1/3 p-2 text-gray-50 ">
        Mas
        </a>
        <a href="{{route('posts.edit',$id)}}"
        class=" shadow-lg rounded border-2 bg-green-800 ease-in-out transition-all active:scale-90  hover:bg-green-600 hover:text-black w-1/3 p-2  text-gray-50">
        Editar
        </a>
        <form action="{{route('posts.destroy',$id)}}" method="POST" class="w-1/3 shadow-lg">
            @method('DELETE')
            @csrf
            <input class=" shadow rounded border-2 bg-red-800 ease-in-out transition-all active:scale-90 hover:bg-red-600 hover:text-black p-2 text-gray-50"type="submit" value="Eliminar">
        </form>
    </div>
</div>
