<div class="flex items-center w-full h-screen mx-6 bg-white md:m-0 md:justify-center">
    <ul class="flex flex-col items-start space-y-4 md:flex-row md:space-y-0 md:space-x-4">
        <li class="flex text-sm leading-none text-gray-900">
            <button
                class="flex items-center px-3 py-2 space-x-2 bg-gray-200 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="font-semibold">Unstar</span>
            </button>
            <a class="flex items-center -ml-px px-3 py-2 font-semibold border border-gray-400 rounded-r-md" href="#_">124</a>
        </li>
        <li x-data="{ open: true }"
            class="flex items-stretch justify-center text-gray-900">
            <section class="relative flex text-sm leading-none">
                <button
                    class="flex items-center px-3 py-2 space-x-2 bg-gray-200 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:outline-none"
                    @click="open = true" aria-haspopup="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Watch</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <aside class="absolute z-10 flex flex-col items-start w-64 mt-10 bg-white border rounded-md shadow-md"
                    role="menu" x-show="open" aria-labelledby="menu-heading" @click.away="open = false">
                    <div id="menu-heading" class="w-full p-3 text-xs border-b">
                        <span class="font-semibold">Notifications</span>
                    </div>
                    <div class="flex flex-col">
                        <button
                            class="flex px-2 py-3 space-x-2 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white focus:outline-none"
                            type="button" role="menuitem" @click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-col space-y-1 text-left">
                                <span class="font-semibold">Not watching</span>
                                <span class="text-xs leading-normal">Be notified only when participating or
                                    @mentioned.</span>
                            </div>
                        </button>
                        <span class="h-0 border-b border-gray-400"></span>
                        <button
                            class="flex px-8 py-3 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white focus:outline-none"
                            type="button" role="menuitem" @click="open = false">
                            <div class="flex flex-col space-y-1 text-left word-wrap">
                                <span class="font-semibold">Watching</span>
                                <span class="text-xs">Be notified of all conversations.</span>
                            </div>
                        </button>
                    </div>
                </aside>
            </section>
            <a class="flex items-center -ml-px px-3 py-2 text-sm font-semibold leading-none border border-gray-400 rounded-r-md" href="#_">4</a>
        </li>
        <li class="text-gray-900">
            <button
                class="flex items-center px-3 py-2 space-x-2 text-sm leading-none bg-gray-200 border border-gray-400 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
                <span>Download</span>
            </button>
        </li>
    </ul>
</div>
