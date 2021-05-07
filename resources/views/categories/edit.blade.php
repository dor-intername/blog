<x-master>

    <form action="/category/{{$category->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$category->name}}">
        <input type="submit" value="send">
    </form>


</x-master>
