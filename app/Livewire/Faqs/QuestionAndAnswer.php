<?php

namespace App\Livewire\Faqs;

use App\Models\Faq;
use Livewire\Component;

class QuestionAndAnswer extends Component
{
      public $faqs;
    public $group = null; // for accordion state
    
    public function mount(Faq $faq)
    {
        $this->faqs = $faq->orderBy('order')->get();

        // dd($this->faqs);
    }
    
    public function render()
    {
        return view('livewire.faqs.question-and-answer');
    }
}
