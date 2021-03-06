<div class="relative flex flex-col items-center justify-center min-h-screen pt-4 bg-gray-300 min-w-screen"
    x-data="{ open: true }">

    <button
        class="flex items-center px-3 py-2 space-x-2 text-sm leading-none bg-gray-200 border border-gray-400 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300"
        @click="open = true">Show Modal</button>

    <div x-show="open" class="absolute max-w-sm my-3 overflow-x-auto bg-white rounded-lg shadow-lg"
        @click.away="open = false">
        <div class="flex px-5 py-4 border-b border-gray-200">
            <div class="flex items-center justify-center w-6">
                <svg class="w-6 h-6 text-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <span class="ml-2 text-lg font-bold text-gray-700">Warning modal</span>
        </div>

        <div class="px-10 py-5 text-gray-600">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
        </div>

        <div class="flex justify-end px-5 py-4 bg-gray-100 border-t border-gray-300">
            <button
                class="px-3 py-2 mr-1 text-sm text-white transition duration-150 bg-orange-500 rounded hover:bg-orange-600"
                @click="open = false">Cancel</button>
            <button
                class="px-3 py-2 text-sm text-gray-600 transition duration-150 bg-gray-100 rounded hover:text-gray-700"
                @click="open = false">Ok</button>
        </div>
    </div>

</div>
