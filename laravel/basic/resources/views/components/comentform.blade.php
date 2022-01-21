<div>
    <form action="{{route('comments.store')}}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{$postid}}">
        <input type="text" name="descripcion" class="border-2 p-2 text-gray-800" placeholder="comentario">
        <input type="submit" value="Comentar " class="border-2 rounded p-1">
    </form>
</div>
