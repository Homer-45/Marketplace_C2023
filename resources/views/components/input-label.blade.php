@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-blue-600']) }}>
    {{ $value ?? $slot }}
</label>
