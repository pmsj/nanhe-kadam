<div class="">
    <div class="mx-auto max-w-5xl">
        <div class="flex justify-between items-center mt-5 mb-10">
            <div>
                <x-button link="{{ route('articles') }}" label="go back" icon="o-arrow-left"  responsive class="btn-secondary btn-md"/>
            </div>
            <div class="text-info">
                <x-alert title="You are viewing individual articles" icon="o-information-circle" class="alert-info text-info-content" dismissible />
            </div>
        </div>
        <x-header title="{{ $article->title }}" subtitle="{{ $article->user->name }} | {{ $article->created_at->diffForHumans() }} "/>
        <div class="">
            <div>
                <x-card title="" subtitle="" class="">
                    <p>{!!  $article->body !!}</p>
                    <x-slot:figure>
                        <img src="https://picsum.photos/500/200" class="w-full rounded-t-xl" />
                    </x-slot:figure>
                </x-card>
            </div>
        </div>
    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
</div>