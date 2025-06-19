<div class="items-center">
    <x-slot:brand class="">
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="lg:hidden mr-3">
            <x-icon name="o-bars-3" class="cursor-pointer" />
        </label>

        {{-- Brand --}}
        <div class="mt-1.5">
            <x-brand />
        </div>
    </x-slot:brand>
    {{-- Right side actions --}}
    <x-slot:actions>
        <x-button @click="$wire.showDrawer3 = true" label="Announcements" icon="o-megaphone"  class="btn-ghost btn-sm" responsive />
        <x-button label="Login" icon="o-user-circle" link="/auth/login" class="btn-ghost btn-sm" responsive />  
    </x-slot:actions>
</div>