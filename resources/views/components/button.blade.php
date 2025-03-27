@props([
    'type' => 'button', 
    'color' => 'white', 
    'text' => '', 
    'iconPaths' => [],
    'iconStroke' => 'currentColor', 
    'href' => null
])

@php
    $baseClasses = "flex items-center gap-2 px-4 py-2 rounded-md text-sm font-sans font-medium transition";
    $colors = [
        'white' => 'bg-white text-[#004BA4] hover:bg-[#003B82] hover:text-white',
        'green' => 'bg-[#2AD72D] text-white hover:bg-[#16BE18]',
    ];
    $selectedColor = $colors[$color] ?? $colors['white'];
@endphp

@if ($href)
    <a href="{{ $href }}" class="{{ $baseClasses }} {{ $selectedColor }}">
@else
    <button type="{{ $type }}" class="{{ $baseClasses }} {{ $selectedColor }}">
@endif
    @if ($iconPaths)
        <svg class="w-5 h-5 group-hover:text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            @foreach ($iconPaths as $path)
                <path d="{{ $path }}" stroke="{{ $iconStroke }}" stroke-width="1.5" stroke-linecap="round"/>
            @endforeach
        </svg>
    @endif
    {{ $text }}
@if ($href)
    </a>
@else
    </button>
@endif