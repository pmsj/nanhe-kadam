<?php

namespace App\Livewire\Footer;

use App\Models\FooterLink as ModelsFooterLink;
use Livewire\Component;

class FooterLink extends Component
{
    public $footerLinks;

    public function mount(ModelsFooterLink $footerLink)
    {
        $this->footerLinks = $footerLink->active()->get();
    }

    public function render()
    {
        return view('livewire.footer.footer-link');
    }
}
