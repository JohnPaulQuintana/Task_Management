<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

    <div class="bg-white rounded-md p-6 shadow-md shadow-black/5">

        <div class="flex justify-between items-center">
            <div class="flex flex-row px-5 gap-5 items-center p-4">
                <div class="text-5xl font-bold text-primary-600 mb-1">{{ $complete }}</div>
                <div class="text-xl font-medium text-gray-400 border-b-2 border-blue-500">Finished Task</div>
            </div>

            <div class="flex flex-row px-5 gap-5 items-center text-blue-400">
                <i class="fa-solid fa-memo-circle-check text-7xl"></i>
            </div>

        </div>
    

    </div>
    <div class="bg-white rounded-md p-6 shadow-md shadow-black/5">

        <div class="flex justify-between items-center">
            <div class="flex flex-row px-5 gap-5 items-center p-4">
                <div class="text-5xl font-bold text-primary-600 mb-1">{{ $daily }}</div>
                <div class="text-xl font-medium text-gray-400 border-b-2 border-blue-500">Daily Task</div>
            </div>
            <div class="flex flex-row px-5 gap-5 items-center text-blue-400">
                <i class="fa-solid fa-memo-circle-check text-7xl"></i>
            </div>
        </div>
    

    </div>
    <div class="bg-white rounded-md p-6 shadow-md shadow-black/5">

        <div class="flex justify-between items-center">
            <div class="flex flex-row px-5 gap-5 items-center p-4">
                <div class="text-5xl font-bold text-primary-600 mb-1">{{ $weekly }}</div>
                <div class="text-xl font-medium text-gray-400 border-b-2 border-blue-500">Weekly Task</div>
            </div>
            <div class="flex flex-row px-5 gap-5 items-center text-blue-400">
                <i class="fa-solid fa-memo-circle-check text-7xl"></i>
            </div>
        </div>
    

    </div>
    <div class="bg-white rounded-md p-6 shadow-md shadow-black/5">

        <div class="flex justify-between items-center">
            <div class="flex flex-row px-5 gap-5 items-center p-4">
                <div class="text-5xl font-bold text-primary-600 mb-1">{{ $monthly }}</div>
                <div class="text-xl font-medium text-gray-400 border-b-2 border-blue-500">Monthly Task</div>
            </div>
            <div class="flex flex-row px-5 gap-5 items-center text-blue-400">
                <i class="fa-solid fa-memo-circle-check text-7xl"></i>
            </div>
        </div>
    

    </div>

    

</div>