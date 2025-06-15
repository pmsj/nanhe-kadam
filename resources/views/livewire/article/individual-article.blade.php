<div class="">
    <div class="mx-auto max-w-5xl">
        <div class="flex justify-between items-center mt-5 mb-10">
            <div>
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
                <x-card title="" subtitle="" class="">
                    <p>{!! str($article->body)->sanitizeHtml()  !!}</p> 
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
