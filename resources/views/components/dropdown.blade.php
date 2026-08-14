@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-surface-light dark:bg-surface-card-dark'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 -translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-1"
            class="absolute z-50 mt-2 {{ $width }} rounded-lg shadow-card {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-lg ring-1 ring-surface-border dark:ring-surface-border-dark {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
