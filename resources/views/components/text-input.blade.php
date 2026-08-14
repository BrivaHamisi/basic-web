@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full px-4 py-2.5 text-sm text-text-primary dark:text-text-primary-dark bg-surface-light dark:bg-surface-card-dark border border-surface-border dark:border-surface-border-dark rounded-lg placeholder:text-text-secondary dark:placeholder:text-secondary-dark focus:outline-none focus:ring-2 focus:ring-brand-primary focus:border-brand-primary focus:ring-offset-0 transition-colors duration-150 disabled:opacity-50 disabled:cursor-not-allowed']) }}>
