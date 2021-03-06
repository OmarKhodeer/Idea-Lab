<x-app-layout>
    <div>
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>

            <span class="ml-2">All ideas (or back to chosen category with filters)</span>
        </a>
    </div>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />

    <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random Title can go here.</a>
                    </h4> --}}

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta natus facere consectetur in totam doloribus voluptate
                        perspiciatis fugit consequuntur, sunt quasi amet eaque quidem officia voluptates repellat rem porro veritatis pariatur itaque
                        voluptas! Deleniti iusto excepturi fuga aliquid vel? Sunt, itaque ratione omnis inventore iste voluptatum nisi hic id nam.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button @click="isOpen = ! isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen=false"
                                    x-transition.origin.top.left.duration
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random Title can go here.</a>
                    </h4> --}}

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta natus facere consectetur in totam doloribus voluptate
                        perspiciatis fugit consequuntur, sunt quasi amet eaque quidem officia voluptates repellat rem porro veritatis pariatur itaque
                        voluptas! Deleniti iusto excepturi fuga aliquid vel? Sunt, itaque ratione omnis inventore iste voluptatum nisi hic id nam.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button @click="isOpen = ! isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen=false"
                                    x-transition.origin.top.left.duration
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random Title can go here.</a>
                    </h4> --}}

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta natus facere consectetur in totam doloribus voluptate
                        perspiciatis fugit consequuntur, sunt quasi amet eaque quidem officia voluptates repellat rem porro veritatis pariatur itaque
                        voluptas! Deleniti iusto excepturi fuga aliquid vel? Sunt, itaque ratione omnis inventore iste voluptatum nisi hic id nam.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button @click="isOpen = ! isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" @click.away="isOpen = false" @keydown.escape.window="isOpen=false"
                                    x-transition.origin.top.left.duration
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}


        {{-- I Will Need This later --}}

        {{-- <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center text-xxs text-blue uppercase font-bold mt-1">Admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>

                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta natus facere consectetur in totam doloribus voluptate
                        perspiciatis fugit consequuntur, sunt quasi amet eaque quidem officia voluptates repellat rem porro veritatis pariatur itaque
                        voluptas! Deleniti iusto excepturi fuga aliquid vel? Sunt, itaque ratione omnis inventore iste voluptatum nisi hic id nam.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andy</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 py-2 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 transition duration-150 ease-in">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> end comment-container --}}

    </div> {{-- end comments-container --}}


</x-app-layout>
