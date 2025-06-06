<div>
    <x-slot:brand>
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="lg:hidden mr-3">
            <x-icon name="o-bars-3" class="cursor-pointer" />
        </label>

        {{-- Brand --}}
        <div class="primary font-bold">Nanhe Kadam</div>
    </x-slot:brand>
    something
    {{-- Right side actions --}}
    <x-slot:actions>
        <x-button @click="$wire.showDrawer3 = true" label="Announcements" icon="o-megaphone"  class="btn-ghost btn-sm" responsive />
        <x-button label="Login" icon="o-user-circle" link="/auth/login" class="btn-ghost btn-sm" responsive />
    </x-slot:actions>
</div>