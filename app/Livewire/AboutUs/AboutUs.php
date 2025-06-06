<?php

namespace App\Livewire\AboutUs;

use App\Models\AboutUs as ModelAboutUs;
use Livewire\Component;

class AboutUs extends Component
{
    public string $selectedTab = '';
    public $sections;

    public function mount()
    {
        $this->sections = ModelAboutUs::active()->orderBy('order')->get();
        $this->selectedTab = $this->sections->first()->slug ?? 'abouts';
    }

    public function render()
    {
        return view('livewire.about-us.about-us');
    }
}
