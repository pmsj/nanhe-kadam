<div>
    <x-header title="About Us" separator/>
    <x-card title="Shaping hearts and minds with love, laughter, and learning." subtitle="Our findings about you" >
    </x-card>
    <div>
        <x-tabs wire:model="selectedTab">
            @foreach($sections as $section)
            <x-tab 
                name="{{$section->slug}}" 
                label="{{ $section->title }}" 
                icon="o-users">
                <div class="prose">{!! $section->description !!}</div>
            </x-tab>
            @endforeach
        </x-tabs>
    </div>
    <!-- Our Team Section -->
    <div class="my-10">
        <x-card title="Our Team" subtitle="Our findings about you" separator></x-card>

    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
    
</div>
