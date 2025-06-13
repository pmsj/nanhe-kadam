<div class="my-20">
    <x-header title="Our Team" subtitle="" size="text-xl" with-anchor separator />
    <section class="">
        <div class="container px-6 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
                @foreach($staff as $member)
                <div class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-secondary hover:text-base-300">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        @if($member->getFirstMediaUrl('staff-images'))
                        <img 
                            class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" 
                            src="{{ $member->getFirstMediaUrl('staff-images') }}" alt=""
                        >
                        @endif

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1 class="text-xl font-semibold text-info-content capitalize md:text-2xl  group-hover:text-primary">{{ $member->user->name ?? $member->name }}</h1>
                            <p class="mt-2 text-info-content capitalize group-hover:text-base-100">{{$member->designation}}</p>
                        </div>
                    </div>
                    <p class="mt-4 group-hover:text-slate-300">{!! $member->bio !!}</p>
                    <div class="flex mt-4 -mx-2">
                        <a href="#" class="mx-2 text-gray-600  group-hover:text-white" aria-label="youtube">
                                <x-icon 
                                    name="fab.youtube" 
                                    class="w-5 h-5 text-error transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
                                />
                        </a>
                        <a href="#" class="mx-2 text-gray-600 group-hover:text-white" aria-label="Facebook">
                            <x-icon 
                                name="fab.facebook" 
                                class="w-5 h-5 text-blue-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
                            />
                        </a>
                        <a href="#" class="mx-2 text-gray-600 group-hover:text-white rounded-full" aria-label="Github">
                            <x-icon 
                                name="fab.instagram" 
                                class="w-5 h-5 text-pink-600 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
                            />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>