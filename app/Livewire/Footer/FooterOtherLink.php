<?php

namespace App\Livewire\Footer;

use App\Models\FooterOtherLink as ModelsFooterOtherLink;
use Livewire\Component;

class FooterOtherLink extends Component
{
      public $footerOtherLinks;

    public function mount(ModelsFooterOtherLink $footerOtherLink)
    {
        $this->footerOtherLinks = $footerOtherLink->active()->get();
    }

    public function render()
    {
        return view('livewire.footer.footer-other-link');
    }
}
