 <!-- start: Sidebar -->
 <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="{{ route('dashboard') }}" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="https://flowbite.com/docs/images/logo.svg" class="w-8 h-8 rounded object-cover" alt="Flowbite Logo" />
        {{-- <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover"> --}}
        <span class="text-lg font-bold text-white ml-3">PaperLike</span>
    </a>
    <ul class="mt-4">
        <li class="mb-1 group active">
            <a href="{{ route('dashboard') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('completed.admin') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-solid fa-ballot-check mr-3 text-lg"></i>
                <span class="text-sm">Completed Task</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                {{-- <span class="ml-auto group-[.selected]:rotate-90">
                    <span class="border border-red-500 rounded-md p-1 text-sm bg-red-500">10</span>
                </span> --}}
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('created.admin') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-sharp fa-solid fa-list-check mr-3 text-lg"></i>
                {{-- <i class="ri-home-2-line "></i> --}}
                <span class="text-sm">Created Task</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                {{-- <span class="ml-auto group-[.selected]:rotate-90">
                    <span class="border border-red-500 rounded-md p-1 text-sm bg-red-500">10</span>
                </span> --}}
            </a>
        </li>

        <li class="mb-1 group">
            <a href="{{ route('admin.users') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-duotone fa-users mr-3 text-lg"></i>
                <span class="text-sm">Users</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                {{-- <span class="ml-auto group-[.selected]:rotate-90">
                    <span class="border border-red-500 rounded-md p-1 text-sm bg-red-500">10</span>
                </span> --}}
            </a>
        </li>
        
        
      

        
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end: Sidebar -->