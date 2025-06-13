<div class="">
    <x-header seperater>
        <x-slot:title>
            <span 
                class="text-xl md:text-3xl lg:text-4xl font-extrabold text-primary-content">
                Welcome to <span class="text-secondary">Nanhe Kadam</span>, play school
            </span>
        </x-slot:title>
         <x-slot:subtitle>
            <span class="text-slate-600 font-semibold md:text-lg lg:text-lg">Where Little Dreams Take Big Steps! </span>
        </x-slot:subtitle>
    </x-header>
    @if($slides)
    <x-carousel  :slides="$slides" autoplay  interval="5000" class="sm:h-96 md:h-120 lg:h-132 border-none"/>
    @endif
</div>
