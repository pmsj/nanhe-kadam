<?php

namespace App\Livewire\Footer;

use App\Models\SocialMediaLink;
use Livewire\Component;

class SocialMediaLinks extends Component
{
    public $socialMediaLinks;
    
    public function mount(SocialMediaLink $socialMediaLink)
    {
        $this->socialMediaLinks = $socialMediaLink->all();
    }

    public function render()
    {
        return view('livewire.footer.social-media-links');
    }
}
