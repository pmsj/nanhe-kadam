<div>
    <x-header title="About Us" separator/>
    <x-card title="Shaping hearts and minds with love, laughter, and learning." subtitle="Our findings about you" >
    </x-card>
    <div class="mx-auto max-w-6xl">
        <x-tabs wire:model="selectedTab">
            @foreach($sections as $section)
            <x-tab 
                name="{{$section->slug}}" 
                label="{{ $section->title }}" 
                icon="o-users">
                <div class="mt-5 my-5">
                     @if($section->getFirstMediaUrl('aboutus-images'))
                        <img 
                            class="rounded-xl" 
                            src="{{ $section->getFirstMediaUrl('aboutus-images') }}" alt=""
                        >
                        @endif
                </div>
                <div class="prose">{!! $section->description !!}</div>
            </x-tab>
            @endforeach
        </x-tabs>
    </div>
    <!-- Our Team Section -->
   <livewire:staff-members.our-team />
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
    
</div>
