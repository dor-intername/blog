<x-master>

    <form action="{{route('profile.update',[$user->id])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$user->name}}">
        <input type="submit" value="send">
    </form>


</x-master>
