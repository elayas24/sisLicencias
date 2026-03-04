<x-layouts::app.sidebar2 :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts::app.sidebar2>
