<x-master>
    {{$category->name}}
    <br><br>
    @foreach($category->posts as $post)

        <a href="{{route('post',$post->id)}}"> {{$post->title}} </a><br>
    @endforeach

</x-master>
