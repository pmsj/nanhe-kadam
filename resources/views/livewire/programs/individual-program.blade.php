<div class="">
    <div class="mx-auto max-w-5xl">
        <div class="flex justify-between items-center mt-5 mb-10">
            <div>
                <x-button link="{{ route('programs') }}" label="go back" icon="o-arrow-left"  responsive class="btn-secondary btn-md"/>
            </div>
            <div class="text-info">
                <x-alert title="You are viewing individual program" icon="o-information-circle" class="alert-info text-info-content" dismissible />
            </div>
        </div>
        <x-header title="{{ $program->title }}" subtitle="{{ $program->date() }}"/>
        <div class="">
            <div>
                <x-card title="" subtitle="" class="">
                    <p>{!! $program->description !!}</p>
                    <x-slot:figure>
                        <img src="https://picsum.photos/500/200" class=" -hue-rotate-45 w-full rounded-t-xl" />
                    </x-slot:figure>
                </x-card>
            </div>
        </div>
    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
</div>