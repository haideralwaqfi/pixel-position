@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 font-bold rounded-xl hover:bg-white/25 transition-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-xs';
    }
    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a class="{{ $classes }}" href="">{{ $slot }}</a>
