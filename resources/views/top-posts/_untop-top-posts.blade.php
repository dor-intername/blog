<div class="col-5 p-0 untop-post border">
    <div class="first-untop-post border"><a href="{{route('post',$post->topPosts()[1]['id'])}}"> {{$post->topPosts()[1]['title']}}</a></div>
    <div class="second-untop-post border">
        @isset($post->topPosts()[2])
            <a href="{{route('post',$post->topPosts()[2]['id'])}}"> {{$post->topPosts()[2]['title']}}</a>
            @endisset

            @empty($post->topPosts()[2])
                'No Record'

            @endempty
    </div>
</div>
