<div class="">
      @if($activeAnnouncements->count() > 0)
     <div class="my-20">
        <x-card title="Announcements" subtitle="" separator />
        <div class="grid lg:grid-cols-2 lg:space-x-5 space-y-5 lg:space-y-0">
                @foreach($activeAnnouncements as $activeAnnouncement)
                    <div class="card space-y-8 bg-secondary text-secondary-content">
                        <div class="flex space-x-5">
                            <div class="">
                                <x-icon 
                                    name="o-megaphone" 
                                    class="w-10 h-10 bg-primary text-primary-content p-2 border-2 border-base-100  rounded-full"
                                />
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-primary">{{ $activeAnnouncement->title }}</h3>
                                <h6 class="text-base-300/90">{{ $activeAnnouncement->dateAndTime() }}</h6>
                            </div>
                        </div>
                        <div>
                            <p>{!! $activeAnnouncement->description !!}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    @endif

</div>