<div class="">
      <div>
        @forelse($footerInfoLinks as $footerInfoLink)
            <div class="mt-2 text-sm">
                <a 
                    href="{{ route($footerInfoLink->info_link_url) }}{{ $footerInfoLink->section_id }}" 
                    class="hover:underline"
                >
                    {{ $footerInfoLink->info_link_title }}
                </a>
            </div>
        @empty
        @endforelse
    </div>
</div>
