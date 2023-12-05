@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    {{-- Links --}}
    <div class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50" style="display: none;" x-show="show">
        {{ $slot }}
    </div>
</div>