 <div class="">
     <x-header 
        title="{{ $article->truncatedTitle() }}" 
        subtitle="{{ $article->user->name }} | {{ $article->created_at->diffForHumans() }}" 
        with-anchor separator 
        size="text-xl"
        />
     <x-card>
         <x-slot:figure>
             <img src="https://picsum.photos/500/200" class="w-full h-64" />
         </x-slot:figure>
         <x-slot:menu>
             <x-button icon="o-share" class="btn-circle btn-sm" />
             <x-icon name="o-heart" class="cursor-pointer" />
         </x-slot:menu>
          <p class="">{!! $article->truncatedBody() !!}</p>
     </x-card>
 </div>