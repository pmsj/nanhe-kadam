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
   <livewire:staff-members.our-team />    
</div>
