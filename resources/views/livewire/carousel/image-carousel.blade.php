<div>
    @if($slides)
    <div class="nanhe-kadam-gradient p-2 rounded-xl"> 
        <x-carousel  :slides="$slides" autoplay  interval="5000" class="sm:h-96 md:h-120 lg:h-120 border-none"/>
    </div>
    @endif
</div>
