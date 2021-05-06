<x-master>

    {{$post->title}}



    <a href="{{route('home')}}">Go Back</a>
    <form action="/post/{{$post->id}}/delete" method="POST">
        @csrf
        @method('DELETE')
    <input type="submit" value="DELETE">
    </form>
</x-master>
