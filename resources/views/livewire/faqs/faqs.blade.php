<div>
    <x-header title="Frequently asked questions" subtitle="your questions and our responses" separator /> 
    <div class="grid lg:grid-cols-12 gap-5 sapce-y-10">
        <div class="lg:col-span-3 rounded-lg">
            <x-menu class="border border-base-content/10 !w-64">
            <x-menu-item title="Home" icon="o-home" />
            <x-menu-item title="Messages" icon="o-envelope" />
            <x-menu-item title="My settings" icon="o-bolt" />
            </x-menu>
        </div>
        <div class="lg:col-span-9 rounded-lg">
            <x-card title="Questions"></x-card>
            <!-- Questions and answers -->
            <livewire:faqs.question-and-answer />
        </div>
    </div>
</div>
