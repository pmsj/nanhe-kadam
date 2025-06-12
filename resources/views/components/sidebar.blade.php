<div class="">
    {{-- Activates the menu item when a route matches the `link` property --}}
    <x-menu activate-by-route>
        <x-menu-item title="Home" icon="o-home" link="/" class="tooltip tooltip-right" data-tip="View All Programs" />
        <x-menu-item title="About Us" icon="o-user-group" link="{{ route('about') }}" tooltip="Home" />
        <x-menu-item title="Our Programs" icon="o-sparkles" link="{{ route('programs') }}" tooltip="Programs" />
        <x-menu-item title="Articles" icon="o-book-open" link="{{ route('articles') }}" tooltip="Articles"/>
        <x-menu-item title="Testimonials" icon="o-face-smile" link="{{ route('testimonials') }}" tooltip="Testimonials"/>
        <x-menu-item title="FAQs" icon="o-question-mark-circle" link="{{ route('faqs') }}" tooltip="FAQs"/>
        <x-menu-sub title="Settings" icon="o-cog-6-tooth">
            <x-menu-item title="Wifi" icon="o-wifi" link="####" />
            <x-menu-item title="Archives" icon="o-archive-box" link="####" />
        </x-menu-sub>
    </x-menu>
</div>