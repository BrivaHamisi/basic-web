@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full px-4 py-3 text-base font-medium text-brand-primary dark:text-brand-primary-light bg-brand-primary/10 dark:bg-brand-primary/10 border-l-4 border-brand-primary dark:border-brand-primary-light'
            : 'block w-full px-4 py-3 text-base font-medium text-text-secondary dark:text-text-secondary-dark hover:text-text-primary dark:hover:text-text-primary-dark hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-brand-primary focus:ring-offset-2 dark:focus:ring-offset-surface-dark transition-colors duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
