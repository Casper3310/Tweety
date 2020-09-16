<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg mb-4">Login 登入</div>
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">E-Mail 信箱
                            </label>
                            <input 
                                class="border border-gray-400 p-2 w-full"
                                id="email" 
                                type="email"                                
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email" 
                                autofocus
                            >

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Password 密碼
                            </label>
                                <input 
                                    class="border border-gray-400 p-2 w-full" 
                                    id="password" 
                                    type="password"                                   
                                    name="password"
                                    required 
                                    autocomplete="current-password"
                                >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="mb-6">                         
                                <div>
                                    <input 
                                        class="mr-1" 
                                        type="checkbox" 
                                        name="remember" 
                                        id="remember" {{ old('rember') ?  'check':''}}                                   
                                        >

                                    <label 
                                        class="uppercase font-bold text-xs text-gray-700" 
                                        for="remember">
                                        Remember Me 
                                    </label>
                                </div>    
                                                        
                        </div>                       
                            <div>
                                <button 
                                    type="submit"
                                    class="px-4 py-2 rounded text-sm bg-blue-600 text-white hover:bg-blue-500 mr-2"
                                >
                                    Login 登入
                                </button>

                                <a href="{{ route('password.request') }}"
                                    class="text-xs text-gray-700">
                                    Forgot you password忘記密碼
                                </a>
                            </div>                        
                    </form>
            </div>
        </div>
    </div>
</x-master>
