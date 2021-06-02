<x-master>

    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title">
        <input type="text" name="body">
        <input type="file" name="image">
        <input type="submit" value="send">
    </form>


</x-master>
