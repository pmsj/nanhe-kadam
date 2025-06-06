<div class="">
    {{-- User --}}
    @if($user = auth()->user())
    <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
        <x-slot:actions>
            <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="/logout" />
        </x-slot:actions>
    </x-list-item>

    <x-menu-separator />
    @endif

    {{-- Activates the menu item when a route matches the `link` property --}}
    <x-menu activate-by-route>
        <x-menu-item title="Home" icon="o-home" link="/" />
        <x-menu-item title="About Us" icon="o-information-circle" link="{{ route('about') }}" />
        <x-menu-item title="Our Programs" icon="o-sparkles" link="{{ route('programs') }}" />
        <x-menu-item title="Articles" icon="o-book-open" link="{{ route('articles') }}" />
        <x-menu-item title="Testimonials" icon="o-face-smile" link="{{ route('testimonials') }}" />
        <x-menu-item title="FAQs" icon="o-question-mark-circle" link="{{ route('faqs') }}" />
        <x-menu-sub title="Settings" icon="o-cog-6-tooth">
            <x-menu-item title="Wifi" icon="o-wifi" link="####" />
            <x-menu-item title="Archives" icon="o-archive-box" link="####" />
        </x-menu-sub>
    </x-menu>
</div>