<div>
   @if($faqs->count() > 0)
    <x-accordion wire:model="group">
        @foreach($faqs as $faq)
        <x-collapse name="faq_{{ $faq->id }}">
        <x-slot:heading class="font-extrabold">{{ $faq->question}}</x-slot:heading>
        <x-slot:content class="text-info-content">{!! $faq->answer !!}</x-slot:content>
        </x-collapse>   
        @endforeach
    </x-accordion>
   @endif
</div>