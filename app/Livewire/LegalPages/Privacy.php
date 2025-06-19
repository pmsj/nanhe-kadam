<?php

namespace App\Livewire\LegalPages;

use App\Models\Privacy as PrivacyModel;
use Livewire\Component;

class Privacy extends Component
{
    public $privacyPolicies;

    public function mount(PrivacyModel $privacy)
    {
        $this->privacyPolicies = $privacy->active()->get();
    }

    public function render()
    {
        return view('livewire.legal-pages.privacy');
    }
}
