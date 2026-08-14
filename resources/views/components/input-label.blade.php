@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-text-primary dark:text-text-primary-dark mb-1.5']) }}>
    {{ $value ?? $slot }}
</label>
