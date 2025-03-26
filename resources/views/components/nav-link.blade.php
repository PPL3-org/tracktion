@props([
    'href' => '#',   
    'active' => false, 
    'tag' => 'a',  
    'iconPath' => '' 
])

@php
    $isActive = request()->is($active);
    $classes = $isActive 
        ? 'bg-[#004BA4] text-white' 
        : 'bg-white text-[#64748B] hover:bg-[#003B82] hover:text-white';
@endphp

@if($tag === 'a')
    <a href="{{ $href }}" class="group flex items-center gap-2 p-2 rounded-md text-sm font-sans font-medium {{ $classes }}">
@else
    <button {{ $attributes->merge(['class' => "group flex items-center gap-2 p-2 rounded-md text-sm font-sans font-medium $classes"]) }}>
@endif
        <svg class="w-5 h-5 text-current group-hover:text-white" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="{{ $iconPath }}"/>
        </svg>
        {{ $slot }}
@if($tag === 'a')
    </a>
@else
    </button>
@endif