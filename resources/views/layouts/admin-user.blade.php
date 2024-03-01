<x-app-layout>
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.header')
        <div class="shadow-md sm:rounded-lg border p-5">

            <div
                class="header-admin-table flex justify-between max-sm:flex-wrap p-2 px-5 font-bold text-gray-600 text-xl">
                <h1 class="text-sm mt-2">User's Registered</h1>
                {{-- <div class="">
                    <button type="button"
                        class="border-b-2 text-sm border-red-400 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                        All
                    </button>
                    <button type="button"
                        class="border-b-2 p-1 text-sm hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                        Today
                    </button>
                    <button type="button"
                        class="border-b-2 p-1 text-sm hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                        Weekly
                    </button>
                    <button type="button"
                        class="border-b-2 p-1 text-sm hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                        Monthly
                    </button>
                </div> --}}

                <div class="flex gap-4">
                    <button type="button"
                        class="border-b-2 text-sm border-red-400 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-blue-500"></i>
                        All
                    </button>
                    <div class="mt-2">
                       
                        <span class="sr-only">Search</span>
                    </div>
                    <form class="flex items-center max-w-sm mx-auto max-sm:mt-2" method="POST">

                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="fa-solid fa-file-magnifying-glass text-blue-500"></i>

                            </div>
                            <input type="text" id="users-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search task number..." required />
                        </div>


                    </form>


                </div>
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Email
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Email Verified
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Status
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Date
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $tasks }} --}}
                        @foreach ($users as $user)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 users-tr" data-n="{{ $user->name }}">
                                <th scope="row"
                                    class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="bg-gray-100">
                                        <i class="fa-sharp fa-solid fa-circle text-green-400"></i>
                                        {{ $user->name }}
                                    </span>
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 text-ellipsis max-w-1/3">
                                    {{ $user->email_verified_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="p-1 bg-gray-100 text-green-600 rounded-md">
                                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                                        {{ __("active") }}
                                    </span>
                                </td>
                                
                                <td class="px-6 py-4">
                                    <span class="p-1 rounded-md">{{ $user->created_at }}</span>
                                </td>
                                
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </main>
    {{-- @include('layouts.create-task') --}}
    @section('scripts')
        <script>
            $(document).ready(function() {

                
                // Listen for input changes
                $('#users-search').on('input', function() {
                    console.log('dwadwa')
                        // Get the search term
                        var searchTerm = $(this).val().toLowerCase();

                        // Loop through each task and show/hide based on the search term
                        $('.users-tr').each(function() {
                            var taskNumber = $(this).data('n').toLowerCase();

                            // Check if the task number includes the search term
                            if (taskNumber.includes(searchTerm)) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                    });

            })
        </script>
    @endsection
</x-app-layout>
