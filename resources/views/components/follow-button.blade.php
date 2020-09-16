@unless (auth()->user()->is($user))
<form method="POST" action="{{ route('follow',$user->user_name) }}">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
        {{auth()->user()->following($user) ? 'Follow Me有':'UnFollow Me無'}}
    <button />
</form>
@endunless