@props(['for', 'value'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block text-sm font-sans text-[#170F49] font-semibold']) }}>
    {{ $value ?? ucfirst($for) }}
</label>