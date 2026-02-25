<x-layouts::guest :title="$title ?? null" :theme="'social-humanities'">
    @pushOnce('styles')
        @vite(['resources/css/social-humanities.css'])
    @endPushOnce

    {{ $slot }}
</x-layouts::guest>