@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 text-sm font-medium text-brand-primary dark:text-brand-primary-light border-b-2 border-brand-primary dark:border-brand-primary-light'
            : 'inline-flex items-center px-3 py-2 text-sm font-medium text-text-secondary dark:text-text-secondary-dark border-b-2 border-transparent hover:text-text-primary dark:hover:text-text-primary-dark hover:border-surface-border dark:hover:border-surface-border-dark focus:outline-none focus:ring-2 focus:ring-brand-primary focus:ring-offset-2 dark:focus:ring-offset-surface-dark rounded-t transition-colors duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
