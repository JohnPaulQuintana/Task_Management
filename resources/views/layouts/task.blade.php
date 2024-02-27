<x-app-layout>

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.header')

        <div class="p-5 w-full">
            <div class="w-full px-5 header-t flex justify-between">
                <h1 class="px-4 font-bold text-gray-600">
                    <i class="fa-duotone fa-list-check text-gray-800"></i>
                    Today Task
                </h1>

                
                <div>
                    <form class="flex items-center max-w-sm mx-auto">   
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search task number..." required />
                        </div>
                        <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-500 rounded-lg border border-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>



            </div>

            <div class="p-4 grid lg:grid-cols-4 gap-2 sm:grid-cols-1 md:grid-cols-3">

                @for ($i = 1; $i < 10; $i++)
                    <div
                        class="max-w-sm bg-white p-2 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100">
                        <div class="header flex justify-between">
                            <div class="">
                                <span class="text-red-400 font-bold text-xs p-1 bg-gray-50 rounded-md">
                                    <i class="fa-duotone fa-sensor-triangle-exclamation text-red-400"></i>
                                    Priority
                                </span>
                            </div>
                            <span class="text-blue-400 font-bold text-xs p-1 bg-gray-50 rounded-md">
                                <i class="fa-duotone fa-hashtag"></i>
                                20-0126
                            </span>

                            <div class="text-gray-200">
                                <i class="fa-sharp fa-solid fa-circle text-red-50"></i>
                                <i class="fa-sharp fa-solid fa-circle text-red-100"></i>
                                <i class="fa-sharp fa-solid fa-circle text-red-200"></i>
                            </div>
                        </div>
                        <div class="content flex px-1 my-4 gap-2 align-middle border-b-2 pb-4">
                            <i
                                class="fa-duotone fa-file-pdf text-7xl border p-3 rounded-lg bg-blue-500 text-white"></i>
                            <div class="">
                                <a href="#">
                                    <h6 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                        Daily Report Documents
                                    </h6>
                                    <p class="overflow-hidden text-gray-500">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </a>

                            </div>

                        </div>
                        <div class="flex gap-2 justify-between">
                            <span class="text-xs bg-gray-50 w-fit p-1 text-green-500 rounded-md dark:text-gray-400">
                                <i class="fa-sharp fa-solid fa-circle"></i>
                                Ready
                            </span>
                            <span class="text-xs bg-gray-50 w-fit p-1 text-blue-500 rounded-md dark:text-gray-400">
                                <i class="fa-duotone fa-circle-user"></i>
                                John Paul Quintana
                            </span>
                            <a href="#"
                                class="border px-3 rounded-md border-blue-200 text-white bg-blue-500 font-medium hover:bg-blue-400 ease-in duration-300">
                                <i class="fa-duotone fa-file-pen text-white"></i>
                                Update
                            </a>
                        </div>

                    </div>
                @endfor



            </div>
        </div>
    </main>
</x-app-layout>
