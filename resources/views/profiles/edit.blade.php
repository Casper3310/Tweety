<x-app>
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                name姓名
            </label>

            <input class="border border-gray-400 p-4 w-full" type="text" name="name" id="name" 
                value='{{$user->name}}'>
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="user_name">
                user_name帳號
            </label>

            <input class="border border-gray-400 p-4 w-full" type="text" name="user_name" id="user_name" 
                value='{{$user->user_name}}'>
            @error('user_name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
                avatar
            </label>
            <div class="flex">
                <input class="border border-gray-400 p-4 w-full" type="file" name="avatar" id="avatar" 
                    value='{{$user->avatar}}'>

                <img src="{{$user->avatar}}" alt="" width="70px" height="70px">
            </div>
        </div>
        @error('avatar')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                email信箱
            </label>

            <input class="border border-gray-400 p-4 w-full" type="email" name="email" id="email" 
                value='{{$user->email}}'>
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                password密碼
            </label>

            <input class="border border-gray-400 p-4 w-full" type="password" name="password" id="password" >
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                password_confirmation確認密碼
            </label>

            <input class="border border-gray-400 p-4 w-full" type="text" name="password_confirmation"
                id="password_confirmation" >
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                submit提交
            </button>
            <a href="{{ $user->path() }}" class="hover:underline">Cancel取消</a>
        </div>        
    </form>
</x-app>
