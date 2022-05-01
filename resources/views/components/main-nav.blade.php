<section class="relative w-full px-8 text-gray-700 bg-std dark:bg-dark2 body-font">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="{{ route('home') }}" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-dark dark:text-std select-none">
            <img src="{{ url(asset('storage/img/logos/favicon.png')) }}" class="mx-auto" alt="AiFx">
            Fx | Intel Brought to Life
            <button x-cloak x-on:click="darkMode = !darkMode;">
                <x-heroicon-s-moon x-show="!darkMode" class="p-1 w-8 h-8 text-dark hover:text-hover bg-gray-100 rounded-md transition cursor-pointer hover:bg-gray-200" />
                <x-heroicon-s-sun x-show="darkMode" class="p-1 w-8 h-8 text-std hover:text-hover bg-gray-700 rounded-md transition cursor-pointer dark:hover:bg-gray-600" />
            </button>
        </a>

        <nav class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <a href="#_" class="relative font-medium leading-6 text-dark hover:text-hover dark:text-hover dark:hover:text-std transition duration-150 ease-out" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Home</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-dark hover:text-hover dark:text-hover dark:hover:text-std transition duration-150 ease-out" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Features</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-dark hover:text-hover dark:text-hover dark:hover:text-std transition duration-150 ease-out" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Pricing</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-dark hover:text-hover dark:text-hover dark:hover:text-std transition duration-150 ease-out" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Blog</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
        </nav>

        <div class="absolute top-0 right-0 mt-5 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    <p class="text-dark dark:text-hover">You are Logged In</p>
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-medium text-dark dark:text-std hover:text-hover dark:hover:text-hover focus:outline-none focus:underline transition ease-in-out duration-150"
                        >
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-medium text-dark hover:text-hover dark:text-std dark:hover:text-hover focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-dark hover:text-hover dark:text-std dark:hover:text-hover focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <!--<div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">
                Sign in
            </a>
            <span class="inline-flex rounded-md shadow-sm">
                <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Sign up
                </a>
            </span>
        </div>-->
    </div>
</section>
