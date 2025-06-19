<?php

namespace App\Livewire\Footer;

use App\Models\FooterInfoLink as ModelsFooterInfoLink;
use Livewire\Component;

class FooterInfoLink extends Component
{
     public $footerInfoLinks;

    public function mount(ModelsFooterInfoLink $footerInfoLink)
    {
        $this->footerInfoLinks = $footerInfoLink->active()->get();
    }
    
    public function render()
    {
        return view('livewire.footer.footer-info-link');
    }
}
