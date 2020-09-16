<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="http://localhost/Tweety/public/tweety">
        @csrf
        <textarea name="body" class="w-full" placeholder="想談什麼" required autofocus>
        </textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}" alt="頭像" class="rounded-full mr-2" width="40px" height="40px">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow py-2 px-10 text-sm text-white">
                Tweety-a-root發布推特
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>
