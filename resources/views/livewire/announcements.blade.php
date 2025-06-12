<x-drawer
    wire:model="showDrawer3"
    title="Hello"
    subtitle="Livewire"
    separator
    with-close-button
    close-on-escape
    class="w-11/12 lg:w-1/3"
>
    <div>Hey!</div>

    <x-slot:actions>
        <x-button label="Cancel" @click="$wire.showDrawer3 = false" />
        <x-button label="Confirm" class="btn-primary" icon="o-check" />
    </x-slot:actions>
</x-drawer>

