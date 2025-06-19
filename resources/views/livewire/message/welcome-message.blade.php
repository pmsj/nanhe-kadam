<div>
    @forelse($welcomeMessages as $welcomeMessage)
    <x-header seperater>
        <x-slot:title>
            <p
                class="text-3xl lg:text-5xl font-extrabold text-neutral-content">
                <span class="nanhe-kadam-brand-gradient bg-clip-text text-transparent">{{ $welcomeMessage->title }}</span>
                <sup class="">
                    <x-icon
                        name="fas.children"
                        class="w-10 h-10 text-secondary text-shadow-md text-shadow-secondary-content transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
                </sup>
            </p>
        </x-slot:title>
        <x-slot:subtitle>
            <span class="text-secondary font-semibold md:text-lg ml-2">
                <span>{{ $welcomeMessage->subtitle_one }} |</span>
                {{ $welcomeMessage->subtitle_two }} 
            </span>
        </x-slot:subtitle>
    </x-header>
    @empty
    <x-header seperater>
        <x-slot:title>
            <p
                class="text-3xl lg:text-5xl font-extrabold text-neutral-content">
                <span class="nanhe-kadam-brand-gradient bg-clip-text text-transparent">Nanhe Kadam</span>
                <sup class="">
                    <x-icon
                        name="fas.children"
                        class="w-10 h-10 text-secondary text-shadow-md text-shadow-secondary-content transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
                </sup>
            </p>
        </x-slot:title>
        <x-slot:subtitle>
            <span class="text-slate-600 font-semibold md:text-lg lg:text-lg">Where Little Dreams Take Big Steps! </span>
        </x-slot:subtitle>
    </x-header>
    @endforelse
</div>