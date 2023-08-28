<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form class="space-y-6"  action="{{ route('landing-page') }}">
        @csrf
        <!-- Hero Section -->
        <section class="bg-blue-800 text-white py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">Discover, Buy, and Sell Unique Products</h1>
                <p class="text-lg mb-8">Explore a world of handpicked products from independent sellers.</p>
                <a href="#" class="bg-white text-blue-800 py-2 px-6 rounded-full font-bold hover:bg-blue-100 transition duration-300">Shop Now</a>
            </div>
        </section>
        
        <!-- Description Section -->
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
        </section>
        
        <!-- Footer -->
        <footer class="bg-blue-500 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2023 Your Marketplace. All rights reserved.</p>
            </div>
        </footer>
    </form>

    
</x-guest-layout>