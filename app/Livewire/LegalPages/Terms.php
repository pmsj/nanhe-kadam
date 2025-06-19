<?php

namespace App\Livewire\LegalPages;

use App\Models\Term;
use Livewire\Component;

class Terms extends Component
{
     public $terms;

    public function mount(Term $term)
    {
        $this->terms = $term->active()->get();
    }

    public function render()
    {
        return view('livewire.legal-pages.terms');
    }
}
