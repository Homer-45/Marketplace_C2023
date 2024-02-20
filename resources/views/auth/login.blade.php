<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form class="space-y-5" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="sm:mx-auto sm:w-full sm:max-w-sm drop-shadow-sm">
            <div class="glitch-wrapper">
                {{-- <div class="glitch">TITLE</div> --}}
                <img class="mx-auto h-20 w-auto glitch" src="{{ asset('dist/img/netflixlogo.png') }}" alt="Marketplace Logo">
             </div>
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
        </div>
        {{-- Enter username --}}
        <div class="drop-shadow-sm">
            <label for="email" class="block mb-2 text-sm font-medium text-white">Enter username</label>
            <input type="text" name="login" :value="old('login')" required autocomplete="username" id="login" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" placeholder="Username" required>
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>
        {{-- Enter password --}}
        <div class="drop-shadow-sm">
            <label for="password" class="block mb-2 text-sm font-medium text-white">Enter password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        {{-- Remember_me Lost password --}}
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember_me" type="checkbox" name="remember_me" value="" class="drop-shadow-sm w-4 h-4 border border-gray-300 rounded-full backdrop-blur-sm bg-white/30 focus:ring-3 focus:ring-blue-300 dark:bg-white-700 dark:border-white-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="remember_me" class="ml-2 text-sm font-medium text-white ">Remember me</label>
            </div>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-700">Lost Password?</a>
            @endif

        </div>

        <button type="submit" class="mt-10 drop-shadow-sm w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
        <div class="text-sm font-medium text-center text-white">
            Not registered? <a href="{{ route('register') }}" class="drop-shadow-sm text-blue-700 hover:underline dark:text-blue-700">Create account</a>
        </div>

        {{-- testing --}}
        {{-- <div class="relative z-0">
            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
        </div>
        <div class="relative z-0">
            <input type="password" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
        </div>
        <div class="relative z-0">
            <input type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <div class="relative z-0">
            <input type="password" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-white appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_standard" class="absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm Password</label>
        </div> --}}
    </form>

    <style>
        .glitch-wrapper {
           width: 100%;
           height: 100%;
           display: flex;
           align-items: center;
           justify-content: center;
           text-align: center;
        }
        
        .glitch {
           position: relative;
           font-size: 60px;
           font-weight: 700;
           line-height: 1.2;
           color: #fff;
           letter-spacing: 4px;
           animation: shift 4s ease-in-out infinite alternate;
           transform: skewX(0deg);
           z-index: 1;
        }
        
        @keyframes shift {
           0%, 40%, 44%, 58%, 61%, 65%, 69%, 73%, 100% {
              transform: skewX(0deg);
           }
        
           41% {
              transform: skewX(10deg);
           }
        
           42% {
              transform: skewX(-10deg);
           }
        
           59% {
              transform: skewX(40deg) skewY(10deg);
           }
        
           60% {
              transform: skewX(-40deg) skewY(-10deg);
           }
        
           63% {
              transform: skewX(10deg) skewY(-5deg);
           }
        
           70% {
              transform: skewX(-50deg) skewY(-20deg);
           }
        
           71% {
              transform: skewX(10deg) skewY(-10deg);
           }
        }
    </style>
</x-guest-layout>

