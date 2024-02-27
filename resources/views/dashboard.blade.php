<x-app-layout>
    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.header')

        <div class="p-6">

            {{-- card --}}
            @include('layouts.card')

            @if (!Auth::user()->role)
                {{-- table for list task --}}
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                        <div class="flex justify-between mb-4 items-start">
                            <div class="font-medium">List of Task</div>

                        </div>
                        <div class="flex items-center mb-4 order-tab">
                            <button type="button" data-tab="order" data-tab-page="completed"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray-600 active">Completed</button>
                            <button type="button" data-tab="order" data-tab-page="priority"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 hover:text-gray-900">Priority</button>
                            <button type="button" data-tab="order" data-tab-page="weekly"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-900">Weekly</button>
                            <button type="button" data-tab="order" data-tab-page="monthly"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-900">Monthly</button>
                        </div>
                        <div class="overflow-x-auto">

                            <table class="w-full min-w-[540px]" data-tab-for="order" data-page="completed">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                            Title</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            page number</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            instruction</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Title</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">2</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">icon here</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Completed</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="w-full min-w-[540px]" data-tab-for="order" data-page="priority">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                            Title</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            page number</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            instruction</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Title</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">2</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">icon here</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Ready</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="w-full min-w-[540px]" data-tab-for="order" data-page="weekly">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                            Title</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            page number</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            instruction</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Title</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">2</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">icon here</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Ready</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <table class="w-full min-w-[540px]" data-tab-for="order" data-page="monthly">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                            Title</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            page number</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            instruction</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Title</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">2</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">icon here</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">Ready</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                        <div class="flex justify-between mb-4 items-start">
                            <div class="font-medium">Manage Services</div>
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                                        class="ri-more-fill"></i></button>
                                <ul
                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form action="" class="flex items-center mb-4">
                            <div class="relative w-full mr-2">
                                <input type="text"
                                    class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                                    placeholder="Search...">
                                <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                            </div>
                            <select
                                class="text-sm py-2 pl-4 pr-10 bg-gray-50 border border-gray-100 rounded-md focus:border-blue-500 outline-none appearance-none bg-select-arrow bg-no-repeat bg-[length:16px_16px] bg-[right_16px_center]">
                                <option value="">All</option>
                            </select>
                        </form>
                        <div class="overflow-x-auto">
                            <table class="w-full min-w-[540px]">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                            Service</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            Price</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                            Clicks</th>
                                        <th
                                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                                    landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                        class="ri-more-2-fill"></i></button>
                                                <ul
                                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                                    landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                        class="ri-more-2-fill"></i></button>
                                                <ul
                                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                                    landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                        class="ri-more-2-fill"></i></button>
                                                <ul
                                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                                    landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                        class="ri-more-2-fill"></i></button>
                                                <ul
                                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex items-center">
                                                <img src="https://placehold.co/32x32" alt=""
                                                    class="w-8 h-8 rounded object-cover block">
                                                <a href="#"
                                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                                    landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                        class="ri-more-2-fill"></i></button>
                                                <ul
                                                    class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}

                </div>
            @else
                {{-- admin side table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg border">

                    <div class="header-admin-table flex justify-between p-2 px-5 font-bold text-gray-600 text-xl">
                        <h1>Created Task</h1>
                        <div class="">
                            <button type="button"
                                class="border-b-2 border-red-400 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                                <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                                All
                            </button>
                            <button type="button"
                                class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                                <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                                Today
                            </button>
                            <button type="button"
                                class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                                <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                                Weekly
                            </button>
                            <button type="button"
                                class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                                <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                                Monthly
                            </button>
                        </div>

                        <div class="flex gap-4">
                            <button type="button" data-modal-target="crud-modal" id="create-task"
                                    class="p-2.5 ms-2 text-sm font-medium text-blue-500 rounded-lg border border-blue-500 hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fa-solid fa-calendar-circle-plus fa-xl"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            <form class="flex items-center max-w-sm mx-auto" method="POST">
                                
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search task number..." required />
                                </div>
                                <button type="submit"
                                    class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-500 rounded-lg border border-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                                
                            </form>


                        </div>
                    </div>

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Task Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Title
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Description
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Category
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Status
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Date
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Action

                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $tasks }} --}}
                            @foreach ($tasks as $task)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="bg-gray-100">
                                            <i class="fa-sharp fa-solid fa-circle text-green-400"></i>
                                            {{ $task->task_number }}
                                        </span>
                                    </th>
                                    <td class="px-6 py-4 capitalize">
                                        {{ $task->title }}
                                    </td>
                                    <td class="px-6 py-4 text-ellipsis max-w-1/3">
                                        {{ $task->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="p-1 bg-gray-100 text-green-600 rounded-md">
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                                            {{ $task->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="p-1 bg-gray-100 text-green-600 rounded-md">
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                                            {{ $task->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="p-1 rounded-md">{{ $task->created_at }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <i class="fa-duotone fa-file-pen"></i>
                                            Edit
                                        </a>
                                        <a href="#"
                                            class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                                            <i class="fa-solid fa-file-xmark"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                                
                        </tbody>
                    </table>
                </div>
            @endif

            {{-- <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Task Statistics</div>
                        
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                        <div class="rounded-md border border-dashed border-gray-200 p-4">
                            <div class="flex items-center mb-0.5">
                                <div class="text-xl font-semibold">10</div>
                                <span
                                    class="p-1 rounded text-[12px] font-semibold bg-blue-500/10 text-blue-500 leading-none ml-1">icon</span>
                            </div>
                            <span class="text-gray-400 text-sm">Completed</span>
                        </div>
                        <div class="rounded-md border border-dashed border-gray-200 p-4">
                            <div class="flex items-center mb-0.5">
                                <div class="text-xl font-semibold">50</div>
                                <span
                                    class="p-1 rounded text-[12px] font-semibold bg-emerald-500/10 text-emerald-500 leading-none ml-1">icon</span>
                            </div>
                            <span class="text-gray-400 text-sm">Today</span>
                        </div>
                        <div class="rounded-md border border-dashed border-gray-200 p-4">
                            <div class="flex items-center mb-0.5">
                                <div class="text-xl font-semibold">4</div>
                                <span
                                    class="p-1 rounded text-[12px] font-semibold bg-rose-500/10 text-rose-500 leading-none ml-1">icon</span>
                            </div>
                            <span class="text-gray-400 text-sm">Weekly</span>
                        </div>
                        <div class="rounded-md border border-dashed border-gray-200 p-4">
                            <div class="flex items-center mb-0.5">
                                <div class="text-xl font-semibold">4</div>
                                <span
                                    class="p-1 rounded text-[12px] font-semibold bg-rose-500/10 text-rose-500 leading-none ml-1">icon</span>
                            </div>
                            <span class="text-gray-400 text-sm">Monthly</span>
                        </div>
                    </div>
                    <div>
                        <canvas id="order-chart"></canvas>
                    </div>
                </div>

                
            </div> --}}
        </div>
    </main>

    @include('layouts.create-task')
    @section('scripts')
        <script>
            $(document).ready(function(){

                let responseSuccess = @json(session('success'));
                let responseStatus = @json(session('status'));
                console.log(responseStatus)
                if(responseStatus){
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: responseSuccess,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

                 // set the modal menu element
                const $targetEl = document.getElementById('crud-modal');

                // options with default values
                const options = {
                    placement: 'bottom-right',
                    backdrop: 'static',
                    backdropClasses:
                        'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
                    closable: true,
                    onHide: () => {
                        console.log('modal is hidden');
                        const inputElements = $targetEl.querySelectorAll('input');
                        inputElements.forEach((input) => {
                            input.value = '';
                        });
                    },
                    onShow: () => {
                        console.log('modal is shown');
                    },
                    onToggle: () => {
                        console.log('modal has been toggled');
                    },
                };

                // instance options object
                const instanceOptions = {
                    id: 'crud-modal',
                    override: true
                };

                $(document).on('click', '#create-task', function(){
                
                    const modal = new Modal($targetEl, options, instanceOptions);
                    // show the modal
                    modal.show();
                })
                $(document).on('click', '#close-crud', function(){
                
                    const modal = new Modal($targetEl, options, instanceOptions);
                    // show the modal
                    modal.hide();
                })
            })
        </script>
       
    @endsection
</x-app-layout>
