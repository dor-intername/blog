<div class="col-5 p-0 untop-post border">
    <div class="first-untop-post border"> {{$topPosts[1]['title']}}</div>
    <div class="second-untop-post border">
        @isset($topPosts[2])
            {{$topPosts[2]['title']}}
            @endisset

            @empty($topPosts[2])
                'No Record'

            @endempty
    </div>
</div>
