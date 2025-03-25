@props(['label', 'name', 'type' => 'text', 'placeholder' => ''])

<div class="mb-4">
    <x-form-label for="{{ $name }}" value="{{ $label }}"></x-form-label>
    <x-form-input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" class="mt-1" {{ $attributes }} required/>
</div>