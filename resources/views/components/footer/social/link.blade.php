@props(['href', 'title', 'icon'])

<li>
    <a href="{{ $href }}" rel="noreferrer" target="_blank" class="text-gray-100 transition hover:opacity-75">
        <span class="sr-only">{{ $title }}</span>
        <i class="text-xl fa-brands fa-{{ $icon }}"></i>
    </a>
</li>