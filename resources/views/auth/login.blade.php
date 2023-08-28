<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form class="space-y-6 bg-blue-900 px-5 py-5" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-xl font-extrabold text-gray-900 dark:text-dark">Sign In</h1>
        {{-- Enter username --}}
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Username</label>
            <input type="text" name="login" :value="old('login')" required autofocus autocomplete="username" id="login" class="px-5 py-2.5 bg-gray-50 border border-gray-300 text-dark-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-dark" placeholder="Username" required>
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>
        {{-- Enter password --}}
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="px-5 py-2.5 bg-gray-50 border border-gray-300 text-dark-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-dark" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        {{-- Remember_me Lost password --}}
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember_me" type="checkbox" name="remember_me" value="" class="w-4 h-4 border border-gray-300 rounded-full bg-white-50 focus:ring-3 focus:ring-blue-300 dark:bg-white-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="remember_me" class="ml-2 text-sm font-medium text-dark-900 dark:text-dark-300">Remember me</label>
            </div>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
            @endif

        </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
        <div class="text-sm font-medium text-dark-500 dark:text-dark-300">
            Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>

    
</x-guest-layout>
