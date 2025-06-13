 <div class="grid lg:grid-cols-2 items-center shadow hover:shadow-lg hover:shadow-primary p-5 rounded-xl">
     <div class="">
        @if($article->getFirstMediaUrl('article-images'))
        <x-card>
            <x-slot:figure>
                <img src="{{ $article->getFirstMediaUrl('article-images') }}" 
                    class="rounded transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110"
                />
            </x-slot:figure>
        </x-card>
        @endif
     </div>
     <div>
        <x-card title="{{ $article->truncatedTitle() }}" subtitle="{{ $article->user->name }} | {{ $article->created_at->diffForHumans() }}" size="text-xl">
          <p class="">{!! $article->truncatedBody() !!}</p>
           <x-slot:actions separator class="justify-between">
                <div class="space-x-2">
                        <x-button icon="o-share" class="btn-accent btn-accent-content btn-circle btn-sm" />
                    <x-button label="Read more" class="btn-primary btn-sm" link="{{ route('articles.show', $article->slug) }}" />
                </div>
            </x-slot:actions>
        </x-card>
     </div>
 </div>