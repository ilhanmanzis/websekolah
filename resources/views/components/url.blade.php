<div class="bg-gray-100 py-3 px-5 flex justify-start">
    <a href="{{ url('/') }}/" class="flex justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6 text-blue-950">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        <span class="text-blue-950 font-semibold px-2">Home</span>
    </a>
    <span class="text-yellow-500 font-semibold">/</span>
    <span class="text-gray-500 px-2">{{ $title }}</span>
</div>
