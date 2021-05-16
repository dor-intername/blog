<x-master>

    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{old('name')}}">
        <input type="submit" value="send">
    </form>


</x-master>
