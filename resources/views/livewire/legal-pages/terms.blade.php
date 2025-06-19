<div class="max-w-4xl items-start">
    @forelse($terms as $term)
    <div class="">
        <x-header 
            title="{{ $term->title }}" 
            separator 
        >
            <x-slot:subtitle class="!justify-end">
                <p class="text-neutral-content">
                    <span class="font-semibold">Updated on : </span>{{ $term->updatedAt() }} 
                </p>
            </x-slot:subtitle>
        </x-header>
    </div>
    <!-- main content -->
    <div class="prose ml-5">
        {!! str($term->content)->sanitizeHtml()  !!}
    </div>
    @empty
     <div class="">
        <x-alert 
            title="This page is temporarily inactive" 
            icon="o-information-circle" 
            class="alert-info font-bold" 
            dismissible 
        />
    </div>
    @endforelse
</div>