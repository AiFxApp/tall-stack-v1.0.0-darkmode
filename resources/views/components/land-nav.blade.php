<section class="relative w-full px-8 text-gray-700 bg-std dark:bg-dark2 body-font">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">

        <a href="{{ route('welcome') }}" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-dark dark:text-std select-none">
            <img src="{{ url(asset('storage/img/logos/favicon.png')) }}" class="mx-auto" alt="AiFx">
            Fx | Intel Brought to Life
            <button x-cloak x-on:click="darkMode = !darkMode;">
                <x-heroicon-s-moon x-show="!darkMode" class="p-1 w-8 h-8 text-dark hover:text-hover bg-gray-100 rounded-md transition cursor-pointer hover:bg-gray-200" />
                <x-heroicon-s-sun x-show="darkMode" class="p-1 w-8 h-8 text-std hover:text-hover bg-gray-700 rounded-md transition cursor-pointer dark:hover:bg-gray-600" />
            </button>
        </a>

        <!-- MENU ONLY ACTIVE AFTER LOGGED IN YET THERE IS A POSSIBLE NAV IN THE FOOTER-->


        <div class="absolute top-0 right-0 mt-8 mr-4">
            @if (Route::has('login'))
                <div class="space-x-5">
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
