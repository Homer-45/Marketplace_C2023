<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body class="font-sans text-gray-900 antialiased" >
        <div class="container-fluid bg-gray-800">
            {{-- style="background-image: url('dist/img/bg.jpeg'); background-size: cover; background-repeat: no-repeat;" --}}
            {{-- <nav class="navbar">
                <div class="logo">
                    <a href="{{ route('login') }}"><img src="{{ asset('dist/img/logo.png') }}" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="">Explore</a></li>
                    <li><a style="padding: 10px; color:blue; border-radius: 10px; background-color: whitesmoke;" href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Sign up</a></li>
                </ul>
            </nav> --}}
            
            <nav class="sticky top-0 z-40 w-full flex-none transition-colors duration-500 lg:z-50 bg-blue-500">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="{{ route('login') }}" class="flex items-center p-2" style="width: 200px; height:auto;">
                        <img src="{{ asset('dist/img/logo.png') }}" class="h-12 mr-3" alt="Marketplace Logo"/>
                        {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Marketplace for on-demand Services</span> --}}
                    </a>
                    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
  
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" >
                
                <div class="flex justify-around bg-white px-1 py-1 rounded-md shadow-md">
                    {{ $slot }}
                    {{ $slot }}
                </div>
                
            </div>
        </div>
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3 bg-red-500">01</div>
            
            <div class="row-span-2 bg-red-600">03</div>
        </div>

        <div class="grid grid-cols-3 py-10 px-10 flex flex-wrap">
            
            <div class="col-span-2 bg-blue-300" style="background-image: url('dist/img/bg.jpeg'); background-size: cover; background-repeat: no-repeat;"></div>
            <div class="bg-blue-500 py-10 px-10">{{$slot}}</div>
            
        </div>
        {{-- <nav class="sticky top-0 z-40 w-full flex-none transition-colors duration-500 lg:z-50 bg-blue-500">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                <a href="{{ route('login') }}" class="flex items-center p-2" style="width: 200px; height:auto;">
                    <img src="{{ asset('dist/img/logo.png') }}" class="h-12 mr-3" alt="Marketplace Logo"/>
                    
                </a>
                <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                    <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent">Explore</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        <section class="bg-blue-800 text-white py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">Discover, Buy, and Sell Unique Products</h1>
                <p class="text-lg mb-8">Explore a world of handpicked products from independent sellers.</p>
                <a href="#" class="bg-white text-blue-800 py-2 px-6 rounded-full font-bold hover:bg-blue-100 transition duration-300">Shop Now</a>
            </div>
        </section>
        
        
        <section class="py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-2xl font-bold mb-4">Why Choose Your Marketplace?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Unparalleled Selection</h3>
                        <p>Discover a wide range of unique products curated for quality and uniqueness.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Support Independent Sellers</h3>
                        <p>Your purchases directly support independent sellers and artisans around the world.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Secure Transactions</h3>
                        <p>Shop with confidence knowing that your transactions are processed securely.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        
        <!-- Footer -->
        <footer class="bg-blue-500 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2023 Your Marketplace. All rights reserved.</p>
            </div>
        </footer>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
