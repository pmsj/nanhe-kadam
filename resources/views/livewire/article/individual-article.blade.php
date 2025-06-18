<div class="bg-neutral text-neutral-content ">
    <div class="mx-auto max-w-5xl">
        <div class="flex justify-between items-center mt-5 mb-10">
            <div class="my-5">
                <x-button 
                    link="{{ route('articles') }}" 
                    label="go back" icon="o-arrow-left"  
                    responsive 
                    class="btn-secondary btn-md"
                />
            </div>
            <div class="text-info">
                <x-alert 
                    title="You are viewing individual articles" 
                    icon="o-information-circle" 
                    class="alert-info text-info-content" 
                    dismissible 
                />
            </div>
        </div>
        <x-header 
            title="{{ $article->title }}" 
            subtitle="{{ $article->user->name }} | {{ $article->created_at->diffForHumans() }} "
        />
        <div class="">
            <div>
                <x-card title="" subtitle="" class="bg-neutral text-neutral-content">
                    <h4 class="text-lg">{!! str($article->body)->sanitizeHtml()  !!}</h4> 
                    @if($article->getFirstMediaUrl('article-images'))
                    <x-slot:figure>
                        <img 
                            src="{{ $article->getFirstMediaUrl('article-images') }}" 
                            class="w-full rounded-xl" />
                    </x-slot:figure>
                    @endif
                </x-card>
            </div>
        </div>
    </div>
</div>
