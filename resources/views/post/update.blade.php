<x-master>

    <form action="/post/{{$post->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content"  value="{{$post->content}}">
        <input type="submit" value="send">
    </form>


</x-master>
