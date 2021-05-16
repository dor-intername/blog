<x-master>

    This is {{ucfirst($user->name)}} Profile <br>
    ID : {{$user->id }}
    @can('edit',$user)
    <br>    Edit USER

    @endcan

    <br>
    @if(auth()->user()->isNot($user))

        <form method="POST" action="{{route('profile.follow',$user)}}">
            @csrf
            <button type="submit" class="bg-blue-500 text-xs rounded-full shadow py-2 px-2 text-white" type="submit">
                {{auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
            </button>
        </form>

        @endif

</x-master>
