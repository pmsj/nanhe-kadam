<div>
    <x-header title="Our Programs" subtitle="With subtitle and separator" separator />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <div>
            <x-card title="Nice things" class="shadow">
                I am using slots here.

                <x-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions separator>
                    <x-button label="Ok" class="btn-primary" />
                </x-slot:actions>
            </x-card>
        </div>
        <div>
            <x-card title="Nice things" class="shadow">
                I am using slots here.

                <x-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions separator>
                    <x-button label="Ok" class="btn-primary" />
                </x-slot:actions>
            </x-card>
        </div>
        <div>
            <x-card title="Nice things" class="shadow">
                I am using slots here.

                <x-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions separator>
                    <x-button label="Ok" class="btn-primary" />
                </x-slot:actions>
            </x-card>
        </div>
        <div>
            <x-card title="Nice things" class="shadow">
                I am using slots here.

                <x-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions separator>
                    <x-button label="Ok" class="btn-primary" />
                </x-slot:actions>
            </x-card>
        </div>
        <div>
            <x-card title="Nice things" class="shadow">
                I am using slots here.

                <x-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions separator>
                    <x-button label="Ok" class="btn-primary" />
                </x-slot:actions>
            </x-card>
        </div>
    </div>
    <footer class="p-5 mt-10">
           <x-footer />
    </footer>
</div>