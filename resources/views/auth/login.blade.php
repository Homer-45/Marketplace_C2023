<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="p-2">
        @csrf

        {{-- logo --}}
        <div style="display: flex; justify-content: center; align-items:center; margin-bottom: 20px;">
            <img src="{{ asset('dist/img/logo.png') }}" alt="Logo" style="width:200px; height:auto; overflow: hidden;">
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="login" :value="__('Email/Name/Phone')" />
            <x-text-input placeholder="Enter Email/Name/Phone" id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input placeholder="Enter Password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-blue-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a style="color:white;" class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="social-icons">
            <a href="#"  title="facebook"> 
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            <a href="#" title="twitter"> 
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <a href="#" title="instagram">  
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    </form>
</x-guest-layout>
