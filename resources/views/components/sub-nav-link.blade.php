@props([
    'active' => false,
    'mobile' => true,
])
<a {{ $attributes }}
    class="text-dark text-sm hover:text-yellow-500 md:px-3 lg:px-0 py-2 {{ isset($mobile) ? 'text-base block' : 'text-sm' }} md:border-0 ml-3 pl-0 pr-3 border-b border-gray-400 "
    aria-current="{{ $active ? 'page' : '' }}">{{ $slot }}</a>
