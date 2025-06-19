<div class="">
      <div>
        @forelse($footerLinks as $footerLink)
            <div class="mt-2 text-sm">
                <a 
                    href="{{ route($footerLink->link_url) }}" 
                    class="hover:underline"
                >
                    {{ $footerLink->link_title }}
                </a>
            </div>
        @empty
        @endforelse
    </div>
</div>
