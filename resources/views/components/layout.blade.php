<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Artama - Niaga</title>
        {{-- <!-- Alpine Js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script> --}}
        <!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>

        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body>
        <div class="w-full
            bg-slate-200 md:pl-20 md:py-4">
            <!-- Navbar for larger screens
            -->
            <div class="navbar hidden md:flex flex-col md:flex-row">
                <h3 class="text-lg md:text-xl text-orange font-bold">Artama Niaga</h3>
                <div
                    class="navbar-start flex flex-col md:flex-row space-y-4 md:space-y-0 md:mx-60 space-x-0 md:space-x-10 text-gray-text font-medium">
                    <a href="{{ route('index') }}"
                        class="hover:text-dark-blue {{ Route::is('index') ? 'text-dark-blue' : '' }} ">Home</a>
                    <a href="{{ route('about-us') }}"
                        class="hover:text-dark-blue {{ Route::is('about-us') ? 'text-dark-blue' : '' }}">About Us</a>
                    <a href="{{ route('product') }}"
                        class="hover:text-dark-blue {{ Route::is('product') ? 'text-dark-blue' : '' }}">Product</a>
                    <a href="{{ route('contact-us') }}"
                        class="hover:text-dark-blue {{ Route::is('contact-us') ? 'text-dark-blue' : '' }}">Contact
                        Us</a>
                </div>
            </div>
        </div>
        <!-- Version mobile -->
        <div x-data="{ open: false }" class="sm:flex md:hidden flex flex-col bg-gray-200 ">
            <div class="flex justify-between items-center px-4 py-2">
                <button @click="open = !open" class="block w-auto border-2 border-black rounded-sm">
                    <!-- Icon bar (tampil saat menu tertutup) -->
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <!-- Icon X (tampil saat menu terbuka) -->
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h3 class="text-lg md:text-xl text-orange font-bold">Artama Niaga</h3>
            </div>

            <div x-show="open" @click.away="open = false"
                class="flex flex-col space-y-2 mt-3   text-link font-medium bg-bg-mobile px-4 py-2">
                <a href="{{ route('index') }}"
                    class="hover:text-dark-blue {{ Route::is('index') ? 'text-dark-blue' : '' }}">Home</a>
                <a href="{{ route('about-us') }}"
                    class="hover:text-dark-blue {{ Route::is('about-us') ? 'text-dark-blue' : '' }}">About Us</a>
                <a href="{{ route('product') }}"
                    class="hover:text-dark-blue {{ Route::is('product') ? 'text-dark-blue' : '' }}">Product</a>
                <a href="{{ route('contact-us') }}"
                    class="hover:text-dark-blue {{ Route::is('contact-us') ? 'text-dark-blue' : '' }}">Contact Us</a>
            </div>
        </div>

        <div class="main-content">
            {{ $slot }}
        </div>
        <x-footer></x-footer>
    </body>

</html>
