<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        <div class="sm:mx-auto sm:w-full sm:max-w-sm drop-shadow-sm">
            <div class="glitch-wrapper">
                {{-- <div class="glitch">TITLE</div> --}}
                <img class="mx-auto h-20 w-auto glitch" src="{{ asset('dist/img/netflixlogo.png') }}" alt="Marketplace Logo">
            </div>
            {{-- <img class="mx-auto h-20 w-auto" src="{{ asset('dist/img/netflixlogo.png') }}" alt="Marketplace Logo"> --}}
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-white">Create new account</h2>
        </div>
        {{-- <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign Up</h5> --}}
        {{-- logo --}}
        {{-- <div style="display: flex; justify-content: center; align-items:center; margin-bottom: 20px;">
            <img src="{{ asset('dist/img/logo.png') }}" alt="Logo" style="width:200px; height:auto; overflow: hidden;">
        </div> --}}
        <!-- Name -->
        <div class="drop-shadow-sm ">
            {{-- <x-input-label for="name" :value="__('Name')" />
            <x-text-input placeholder="Enter name" id="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your name</label>
            <input type="text" name="name" :value="old('name')" id="name" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" placeholder="Name" required>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 drop-shadow-sm ">
            {{-- <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="Enter email" id="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter new email</label>
            <input type="text" name="email" :value="old('email')" id="email" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" placeholder="Email" required>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 drop-shadow-sm ">
            {{-- <x-input-label for="password" :value="__('Password')" />

            <x-text-input placeholder="Enter password" id="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

            {{-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Create new password</label>
            <input type="password" autocomplete="new-password" name="password" :value="new('password')" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="New password" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Create new password</label>
            <input type="password" name="password" id="password" placeholder="New password" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 drop-shadow-sm ">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input placeholder="Confirm P]password" id="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}

            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
            <input type="password" autocomplete="new-password" name="password_confirmation" :value="__('password_confirmation')" id="password_confirmation" class="drop-shadow-md backdrop-blur-sm bg-white/10 px-5 py-2.5 border border-gray-300 text-dark-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white-400 dark:placeholder-gray-200 dark:text-white" placeholder="Confirm password" required>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- <div class="flex items-center justify-between mt-4"> --}}
            {{-- <a style="color: white" class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ __('Register') }}
            </x-primary-button> --}}
            <button type="submit" class="drop-shadow-sm text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 w-full py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
            <div class="text-sm font-medium text-white text-center">
                Already registered? <a href="{{ route('login') }}" class="text-blue-700 hover:underline dark:text-blue-700">Login account</a>
            </div>
            
                
            
            
        {{-- </div> --}}
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
