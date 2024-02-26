<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full text-red-600 border border-red-600 bg-primary-600  focus:ring-4 hover:text-red-700 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800']) }}>
    {{ $slot }}
</button>
