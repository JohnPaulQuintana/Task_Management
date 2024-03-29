<x-app-layout>

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('layouts.header')

        <div class="p-5 w-full">

            <div class="w-full px-5 header-t flex justify-between">
                <h1 class="px-4 font-bold text-gray-600">
                    <i class="fa-duotone fa-list-check text-gray-800"></i>
                    Completed Task
                </h1>

                {{-- <div>
                    <button type="button" class="border-b-2 border-red-400 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-red-500"></i>
                        All
                    </button>
                    <button type="button" class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-red-500"></i>
                        Today
                    </button>
                    <button type="button" class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-red-500"></i>
                        Weekly
                    </button>
                    <button type="button" class="border-b-2 p-1 hover:bg-gray-100 hover:cursor-pointer text-gray-500">
                        <i class="fa-duotone fa-calendar-star text-red-500"></i>
                        Monthly
                    </button>
                </div> --}}

                <div>
                    <form class="flex items-center max-w-sm mx-auto">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                                </svg>
                            </div>
                            <input type="text" id="completed-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search task number..." required />
                        </div>
                        <button type="submit"
                            class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-500 rounded-lg border border-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>


                </div>





            </div>

            <div class="p-4 grid lg:grid-cols-4 gap-2 sm:grid-cols-1 md:grid-cols-3" id="completed-list">

                @foreach ($tasks as $task)
                    <div data-n="{{ $task->task_number }}"
                        class="task max-w-sm bg-white p-2 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-100">
                        <div class="header flex justify-between">
                            <div class="">
                                <span class="text-green-400 font-bold text-xs p-1 bg-gray-50 rounded-md">
                                    <i class="fa-duotone fa-file-check text-green-500"></i>
                                    Completed
                                </span>
                            </div>
                            <span class="text-blue-400 font-bold text-xs p-1 bg-gray-50 rounded-md">
                                <i class="fa-duotone fa-hashtag"></i>
                                {{ $task->task_number }}
                            </span>

                            <div class="text-gray-200">
                                <i class="fa-sharp fa-solid fa-circle text-red-50"></i>
                                <i class="fa-sharp fa-solid fa-circle text-red-100"></i>
                                <i class="fa-sharp fa-solid fa-circle text-red-200"></i>
                            </div>
                        </div>
                        <div class="content flex px-1 my-4 gap-2 align-middle border-b-2 pb-4">
                            <i
                                class="fa-duotone fa-file-pdf text-7xl border p-3 rounded-lg bg-blue-50 border-blue-50 text-blue-500"></i>
                            <div class="">
                                <a href="#">
                                    <h6 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $task->title }}
                                    </h6>
                                    <p class="overflow-hidden text-gray-500">
                                        {{ $task->description }}
                                    </p>
                                </a>

                            </div>

                        </div>
                        <div class="flex gap-2 justify-between">
                            <span class="text-xs bg-gray-50 w-fit p-1 text-green-500 rounded-md dark:text-gray-400">
                                <i class="fa-sharp fa-solid fa-circle"></i>
                                finished
                            </span>
                            <span class="text-xs bg-gray-50 w-fit p-1 text-blue-500 rounded-md dark:text-gray-400">
                                <i class="fa-duotone fa-circle-user"></i>
                                {{ Auth::user()->role == 0 ? Auth::user()->name : $task->name }}
                            </span>
                            <a href="#" data-modal-target="iframe-modal" data-path_id="{{ $task->pathID }}" data-path="{{ $task->path }}"
                                class="completed-tasked border px-3 rounded-md border-blue-200 text-white bg-blue-500 font-medium hover:bg-blue-400 ease-in duration-300">

                                <i class="fa-duotone fa-folder-open text-white"></i>
                            </a>
                        </div>

                    </div>
                @endforeach




            </div>
        </div>
    </main>

    @include('layouts.iframe')
    @section('scripts')
        <script>
            // completed search
            // set the modal menu element
            const $targetEl = document.getElementById('iframe-modal');

            // options with default values
            const options = {
                placement: 'bottom-right',
                backdrop: 'static',
                backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
                closable: true,
                onHide: () => {
                    console.log('modal is hidden');
                    const inputElements = $targetEl.querySelectorAll('.input');
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
                id: 'iframe-modal',
                override: true
            };

            // Listen for input changes
            $('#completed-search').on('input', function() {
                console.log('dwadwa')
                // Get the search term
                var searchTerm = $(this).val().toLowerCase();

                // Loop through each task and show/hide based on the search term
                $('#completed-list .task').each(function() {
                    var taskNumber = $(this).data('n').toLowerCase();

                    // Check if the task number includes the search term
                    if (taskNumber.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // open the iframe
            $(document).on('click', '.completed-tasked', function() {
                // alert($(this).data('path'))
                $('#open-pdf').attr('src', 'Storage/'+$(this).data('path'))
                const modal = new Modal($targetEl, options, instanceOptions);
                // show the modal
                modal.show();
            })

            $(document).on('click', '#close-iframe', function() {

                const modal = new Modal($targetEl, options, instanceOptions);
                // show the modal
                modal.hide();
            })
        </script>
    @endsection
</x-app-layout>
