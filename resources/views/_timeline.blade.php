
<div class="border border-gray-300 rounded-lg">
    @forelse ($tweety as $tweet)
    @include('_tweet')
    @empty
        <p class="p-4">Not tweety 沒有推特訊息</p>
    @endforelse  
    {{ $tweety->links() }}
</div>
