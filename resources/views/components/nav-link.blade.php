@props([
    'active' => false,
    'mobile' => false,
    'page' => true,
    'last' => false,
])
<a {{ $attributes }} id="link-text"
    class="{{ $page ? 'md:text-white' : 'md:text-dark' }} text-dark hover:text-yellow-500 md:pl-3 sm:pl-0 py-2 ml-3 md:ml-0 font-medium {{ $mobile == true ? 'text-sm block' : 'text-md' }} md:border-0 {{ $last == true ? 'border-0' : 'border-b border-gray-400' }}"
    aria-current="{{ $active ? 'page' : '' }}">{{ $slot }}</a>
