<div>
    <x-header title="Our Programs" subtitle="Find all the programs that we offer here." separator />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        @forelse($programs as $program)
        <div>
            <x-card title="{{$program->short_title}}" subtitle="" class="bg-base-200 hover:shadow transition duration-150 ease-in-out h-full">
                <p>{!! $program->short_description !!}</p>
                <x-slot:figure>
                    <a href="{{ route('programs.show', $program->slug) }}">
                    <img src="https://picsum.photos/500/200" class="transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500"/>
                    </a>
                </x-slot:figure>
                <x-slot:actions separator class="justify-between">
                        <div class="space-x-2">
                             <x-button icon="o-share" class="btn-accent btn-accent-content btn-circle btn-sm" />
                            <x-button label="Know more" class="btn-primary btn-sm btn-soft" link="{{ route('programs.show', $program->slug) }}" />
                        </div>
                </x-slot:actions>
            </x-card>
        </div>
        @empty
        <!-- section display when no records found -->
        <div class="col-span-2">
            <x-alert icon="o-exclamation-triangle" class="alert-info alert-soft w-full" >
                <strong>No programs found yet!</strong> Please come back later.
            </x-alert>
        </div>
        @endforelse
    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
</div>