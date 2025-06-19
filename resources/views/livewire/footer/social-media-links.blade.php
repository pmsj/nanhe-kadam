<div class="space-x-2">
   @forelse($socialMediaLinks as $link)
        @if($link->youtube_url)
        <a href="{{ $link->youtube_url }}" target="_blank">
            <x-icon
                name="fab.youtube"
                class="w-8 h-8 text-error transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
        </a>
        @endif
        @if($link->facebook_url)
        <a href="{{ $link->facebook_url }}" target="_blank">
            <x-icon
                name="fab.facebook"
                class="w-6 h-6 text-blue-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
        </a>
        @endif
        @if($link->instagram_url)
        <a href="{{ $link->instagram_url }}" target="_blank">
            <x-icon
                name="fab.instagram"
                class="w-6 h-6 text-pink-600 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
        </a>
        @endif
        @if($link->linkedin_url)
        <a href="{{ $link->linkedin_url }}" target="_blank">
            <x-icon
                name="fab.linkedin"
                class="w-6 h-6 text-blue-700 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
        </a>
        @endif
        @if($link->twitter_url)
        <a href="{{ $link->twitter_url }}" target="_blank">
            <x-icon
                name="fab.twitter"
                class="w-6 h-6 text-sky-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" />
        </a>
        @endif
   @empty
   <p class="text-sm">Social media links</p>
   @endforelse
</div>