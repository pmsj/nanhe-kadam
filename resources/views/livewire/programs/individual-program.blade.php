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
                        <img src="{{ $program->getFirstMediaUrl('program-images') }}" class="w-full rounded-xl" />
                    </x-slot:figure>
                </x-card>
            </div>
        </div>
    </div>

