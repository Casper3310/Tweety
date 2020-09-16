<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold txet-xl mb-4">Following跟隨</h3>
    <ul>
        @forelse (auth()->user()->follows as $user)
        <li class="{{ $loop->last ? '' : 'mb-4'}}">
            <div>
                <a href="{{ route('profile',$user)}}" class="flex items-center text-sm">
                    <img src={{$user->avatar}} alt="" class="rounded-full mr-2" width="60" height="60">
                    {{$user->name}}
                </a>
            </div>
        </li>
        @empty
        <li>Not Friend 沒有朋友</li>
        @endforelse
    </ul>
</div>
