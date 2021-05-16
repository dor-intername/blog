<x-master>

    <section class="row categories border">
        @foreach($categories as $category)

            @include('_category')
        @endforeach
    </section>
    <div class="container">

    <section class="row top-posts ">

        @include('posts.top-posts._main-top-post')

        @include('posts.top-posts._untop-top-posts')
    </section>


    <section class="posts row">
        <div class="col-8">
            @foreach($post->latestPosts() as $post)
                @include('posts._latest_posts')
            @endforeach
        </div>

        <div class="col-4">
            @foreach($post->likablePosts() as $post)
                @include('posts._likable_post')
            @endforeach
        </div>
    </section>
    </div>
</x-master>
