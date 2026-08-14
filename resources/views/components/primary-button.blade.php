<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-brand-primary border border-transparent rounded-lg hover:bg-brand-primary-dark active:bg-brand-primary-light focus:outline-none focus:ring-2 focus:ring-brand-primary focus:ring-offset-2 dark:focus:ring-offset-surface-dark transition-colors duration-150 disabled:opacity-50 disabled:cursor-not-allowed']) }}>
    {{ $slot }}
</button>
