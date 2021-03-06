<style>
    [x-cloak] { display: none; }
</style>

<div class="relative h-screen lg:h-screen w-full bg-cover bg-no-repeat" style="background-image: url(https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80);">

<div class="absolute inset-0 z-0 bg-gray-900 opacity-75"></div>

    <!-- Desktop menu -->
    <nav>
        <ul class="text-white text-sm relative z-10 p-6 hidden md:flex">
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">First Link</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">Second Link</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">Third Link</a>
            </li>
            <li class="mx-auto">
                <span class="text-3xl">Event</span>
            </li>
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">Fourth Link</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">Fifth Link</a>
            </li>
            <li class="mx-2">
                <a class="hover:text-gray-300" href="#">Sixth Link</a>
            </li>
        </ul>
    </nav>
    <!-- End Desktop menu -->

    <!-- Mobile menu -->
    <div x-data="{ open: false }">
        <nav class="flex items-center justify-between flex-wrap p-6 md:hidden w-full z-20" :class="open === true ? 'fixed h-full bg-blue-900' : 'relative bg-transparent'">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Event</span>
            </div>
            <div class="block lg:hidden">
                <button @click="open = !open" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div x-cloak x-show.transition="open" class="w-full h-full flex items-center justify-center">
                <div class="text-xl lg:flex-grow">
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                    First link
                </a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                    Second Link
                </a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white">
                    Third Link
                </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile menu -->

    <div class="h-full container mx-auto flex items-center justify-center">

        <div class="flex flex-col items-center z-10">
            <h1 class="mx-6 mt-1 font-bold text-center text-white text-5xl md:text-6xl sm:text-center sm:mx-0">Here a really cool title!</h1>
            <p class="text-white text-xl font-medium w-2/3 text-center my-6">Some fancy text to invite to an event, the place of the event and the date of the event.</p>
            <div class="flex flex-col md:flex-row justify-center mt-10">
                <a href="#" class="py-2 px-8 rounded-full border-2 border-pink-500 text-white hover:bg-pink-500 text-center m-2">Tickets</a>
                <a href="#" class="py-2 px-8 rounded-full border-2 border-pink-500 text-white bg-pink-500 hover:bg-transparent text-center m-2">Coming soon</a>
            </div>
        </div>

    </div>
<div>
