<div class="max-w-4xl items-start">
    @forelse($privacyPolicies as $privacyPolicy)
    <div class="">
        <x-header 
            title="{{ $privacyPolicy->title }}" 
            separator 
        >
            <x-slot:subtitle class="!justify-end">
                <p class="text-primary-content">
                    <span class="font-semibold">Updated on : </span>{{ $privacyPolicy->updatedAt() }} 
                </p>
            </x-slot:subtitle>
        </x-header>
    </div>
    <!-- main content -->
    <div class="prose">
        {!! str($privacyPolicy->content)->sanitizeHtml()  !!}
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