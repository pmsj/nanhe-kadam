<div class="">
      <div>
        @forelse($footerOtherLinks as $footerOtherLink)
            <div class="mt-2 text-sm">
                <a 
                    href="{{ route($footerOtherLink->other_link_url) }}{{ $footerOtherLink->section_id }}" 
                    class="hover:underline"
                >
                    {{ $footerOtherLink->other_link_title }}
                </a>
            </div>
        @empty
        @endforelse
    </div>
</div>
