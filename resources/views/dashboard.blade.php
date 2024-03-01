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
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray-600 active">Latest
                                Task</button>
                            {{-- <button type="button" data-tab="order" data-tab-page="priority"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 hover:text-gray-900">Priority</button>
                            <button type="button" data-tab="order" data-tab-page="weekly"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-900">Weekly</button>
                            <button type="button" data-tab="order" data-tab-page="monthly"
                                class="bg-gray-50 text-sm font-medium text-gray-600 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-900">Monthly</button> --}}
                        </div>
                        <div class="relative overflow-x-auto">
                            <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                            <td class="pr-4 py-4 text-right">
                                                <a href="{{ route('take', $task->id) }}"
                                                    class="font-medium text-blue-600 hover:text-blue-400 dark:text-blue-500 hover:underline">
                                                    <i class="fa-duotone fa-check-to-slot fa-2xl"></i>
                                                    Take
                                                </a>
                                                {{-- <a href="#"
                                                    class="font-medium text-red-600 hover:text-red-400 dark:text-blue-500 hover:underline">
                                                    <i class="fa-solid fa-file-xmark fa-2xl"></i>
                                                    
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            @else
                {{-- admin side table --}}
                <div class="shadow-md sm:rounded-lg border">

                    <div
                        class="header-admin-table flex justify-between max-sm:flex-wrap p-2 px-5 font-bold text-gray-600 text-xl">
                        <h1 class="text-sm mt-2">Created Task</h1>
                        <div class="">
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
                        </div>

                        <div class="flex gap-4">
                            <div class="mt-2">
                                <i class="fa-solid fa-calendar-circle-plus text-green-500"
                                    data-modal-target="crud-modal" id="create-task"></i>
                                <span class="sr-only">Search</span>
                            </div>
                            <form class="flex items-center max-w-sm mx-auto max-sm:mt-2" method="POST">

                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <i class="fa-solid fa-file-magnifying-glass text-blue-500"></i>

                                    </div>
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search task number..." required />
                                </div>


                            </form>


                        </div>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                        <td class="pr-4 py-4 text-right">
                                            <a href="#" id="edit-task" data-id="{{ $task->id }}"
                                                data-title="{{ $task->title }}"
                                                data-number="{{ $task->task_number }}"
                                                data-description="{{ $task->description }}"
                                                data-category="{{ $task->category }}"
                                                class="font-medium text-blue-600 hover:text-blue-400 dark:text-blue-500 hover:underline">
                                                <i class="fa-duotone fa-file-pen fa-2xl"></i>

                                            </a>
                                            <a href="#" id="delete-task" data-id="{{ $task->id }}"
                                                class="font-medium text-red-600 hover:text-red-400 dark:text-blue-500 hover:underline">
                                                <i class="fa-solid fa-file-xmark fa-2xl"></i>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif


        </div>
    </main>

    @include('layouts.create-task')
    @section('scripts')
        <script>
            $(document).ready(function() {

                let responseSuccess = @json(session('success'));
                let responseStatus = @json(session('status'));
                console.log(responseStatus)
                if (responseStatus) {
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
                    id: 'crud-modal',
                    override: true
                };

                // create task
                $(document).on('click', '#create-task', function() {

                    $('.h3').text('Create New Task')
                    const modal = new Modal($targetEl, options, instanceOptions);
                    // show the modal
                    modal.show();
                })

                // edit task
                $(document).on('click', '#edit-task', function() {
                    $('.h3').text('Edit Task')
                    let taskID = $(this).data('id')
                    let taskNumber = $(this).data('number')
                    let taskTitle = $(this).data('title')
                    let taskDescription = $(this).data('description')
                    let taskCategory = $(this).data('category')
                    $('#task-id').val(taskID)
                    $('#task_number').val(taskNumber)
                    $('#task_title').val(taskTitle)
                    $('#description').val(taskDescription)

                    const modal = new Modal($targetEl, options, instanceOptions);
                    // show the modal
                    modal.show();
                })
                $(document).on('click', '#close-crud', function() {

                    const modal = new Modal($targetEl, options, instanceOptions);
                    // show the modal
                    modal.hide();
                })

                
            })
        </script>
    @endsection
</x-app-layout>
