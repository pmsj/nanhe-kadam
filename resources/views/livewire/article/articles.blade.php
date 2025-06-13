<div>
    <!-- HEADER -->
    <x-header title="All articles" separator progress-indicator>
    </x-header>
    <div class="mx-auto max-w-7xl p-3">
        <div class="grid md:grid-cols-12 grid-flow-row gap-5 space-y-10">
            <!-- sidebar -->
            <!-- left side -->
            <div class="md:col-span-4 lg:col-span-3 rounded-lg shrink-0">
                <x-menu class="border border-base-content/10 !w-64">
                    <x-menu-item title="My Articles" icon="o-home" />
                    <x-menu-item title="Messages" icon="o-envelope" />
                    <x-menu-item title="My settings" icon="o-bolt" />
                </x-menu>
            </div>
            <!-- right side -->
            <div class="md:col-span-8 lg:col-span-9">
                @foreach($articles as $article)
                <div class="mx-auto max-w-5xl  my-4">
                    <livewire:article.article-card :article="$article" :key="$article->id" />
                </div>
                @endforeach
                <div class="mt-10">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
    <footer class="p-5 mt-10">
        <x-footer />
    </footer>
</div>