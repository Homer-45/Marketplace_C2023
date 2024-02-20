<!DOCTYPE html>
<html class="h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Marketplace') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans h-full" >
        {{-- <div class="container-fluid bg-gradient-to-br from-blue-500 via-indigo-500 to-red-500">
            
            <nav class="w-full flex-none backdrop-blur-sm bg-white/30">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="{{ route('login') }}" class="flex items-center p-2" style="width: 200px; height:auto;">
                        <img src="{{ asset('dist/img/logo.png') }}" class="h-12 mr-3" alt="Marketplace Logo"/>
                    </a>
                    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white-500 rounded-lg md:hidden hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-200 dark:text-white-900 dark:hover:bg-blue-700 dark:focus:ring-blue-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-blue-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-blue-800 md:dark:bg-transparent dark:border-blue-700">
                            <li>
                                <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-900 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-900 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="min-h-screen flex d-flex sm:justify-center items-center" >
                <div class="w-full flex justify-center px-10 py-10 m-5">
                    <div class="rounded-l-xl bg-green-900 col-span-2 flex justify-start ml-10 items-center rounded-left-xl backdrop-blur-sm bg-white/30">
                        <div class="px-10 ml-10">
                            <h1 class="text-7xl font-bold text-white">Marketplace</h1>
                            <h1 class="ml-1 text-2xl font-bold text-white mb-5">For On-Demand Services</h1>

                            
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-xl transition duration-300 ease-in-out transform hover:scale-105">Get Started</a>
                        </div>
                        
                    </div>
                    <div class="md:w-1/2 lg:w-1/3 sm:w-full backdrop-blur-sm bg-white/30 py-5 px-5 rounded-r-xl">{{$slot}}</div>
                </div>
            </div>
        </div> --}}
        
        
        <!-- Footer -->
        {{-- <footer class="bg-blue-600 text-white py-4">
            <div class="container  mx-auto text-center">
                <p>&copy; 2023 Your Marketplace. All rights reserved.</p>
            </div>
        </footer> --}}
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            {{-- <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-12 w-auto" src="{{ asset('dist/img/logo.png') }}" alt="Marketplace Logo">
              <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
            </div> --}}
          
            <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
              {{-- <form class="space-y-6" action="#" method="POST">
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="text-sm">
                      <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
              </form> --}}{{$slot}}
              
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
