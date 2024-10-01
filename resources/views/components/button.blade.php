<button type="button"
    {{ $attributes->merge(['class' => 'text-'.$color.' bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2']) }}>
    {{ $slot }}
</button>
