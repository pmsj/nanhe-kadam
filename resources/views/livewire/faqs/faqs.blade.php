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
            <x-card title="Questions">
            </x-card>
            <x-accordion wire:model="group">
                <x-collapse name="group1">
                    <x-slot:heading>Question 1</x-slot:heading>
                    <x-slot:content>Hello 1</x-slot:content>
                </x-collapse>
                <x-collapse name="group2">
                    <x-slot:heading>Question 2</x-slot:heading>
                    <x-slot:content>Hello 2</x-slot:content>
                </x-collapse>
                <x-collapse name="group3">
                    <x-slot:heading>Question 3</x-slot:heading>
                    <x-slot:content>Hello 3</x-slot:content>
                </x-collapse>
            </x-accordion>
        </div>
    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
</div>
