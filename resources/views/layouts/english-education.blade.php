<x-layouts::guest :title="$title ?? null" :theme="'english-education'">
    @pushOnce('styles')
        @vite(['resources/css/english-education.css'])
    @endPushOnce

    {{ $slot }}
</x-layouts::guest>
