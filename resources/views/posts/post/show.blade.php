<x-master>

    {{$post->title}}

<br>
    @can('update',$post)
        <br>    Edit Post

    @endcan
    <br>
    @foreach($post->comments as $comment)
        {{$comment->content}} <br>

    @endforeach

    <a href="{{route('home')}}">Go Back</a>
    <form action="/post/{{$post->id}}/delete" method="POST">
        @csrf
        @method('DELETE')
    <input type="submit" value="DELETE">
    </form>
</x-master>
