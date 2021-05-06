<x-master>

    <form action="/posts" method="POST">
        @csrf

        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit" value="send">
    </form>


</x-master>
