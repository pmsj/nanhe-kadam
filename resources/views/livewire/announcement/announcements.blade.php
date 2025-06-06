<div>
      @if($activeAnnouncements->count() > 0)
     <div class="my-20 ">
        <x-card title="Announcements" subtitle="Our findings about you" />
        
        <div class="grid lg:grid-cols-2 lg:space-x-5 space-y-5 lg:space-y-0">
                @foreach($activeAnnouncements as $activeAnnouncement)
                <x-card class="border">
                    <x-header title="{{ $activeAnnouncement->title }}" subtitle="Announcement Date: {{ $activeAnnouncement->dateAndTime() }}" size="text-md" separator icon="o-megaphone" icon-classes="bg-warning rounded-full p-1 w-8 h-8"/>
                    <p>{!! $activeAnnouncement->description !!}</p>
                </x-card>
                @endforeach
        </div>
        
    </div>
    @endif

</div>