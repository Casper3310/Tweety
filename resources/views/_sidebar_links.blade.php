<ul>
    <li><a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home 首頁</a></li>
    <li><a href="{{ route('explore') }}" class="font-bold text-lg mb-4 block">Explore 探索</a></li>

    <li><a href="{{ route('profile',auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile個人資料</a></li>
    
    @auth
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button 
                class="font-bold text-lg"
                type="submit">Logout登出</button>
        </form>
    </li>       
    @else
        <a href="{{ route('login') }}">Login登入</a  
    @endauth
                
    
</ul>