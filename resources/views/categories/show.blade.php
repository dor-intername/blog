<x-master>
    {{$category->name}}
    <br><br>
    @foreach($category->posts as $post)

        {{$post->title}} <br>
    @endforeach

</x-master>
