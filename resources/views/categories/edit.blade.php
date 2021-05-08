<x-master>

    <form action="{{route('category.store')}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$category->name}}">
        <input type="submit" value="send">
    </form>


</x-master>
