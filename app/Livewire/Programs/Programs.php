<?php

namespace App\Livewire\Programs;

use App\Models\Program;
use Livewire\Component;

class Programs extends Component
{
    public $programs;

    public function mount(Program $program)
    {
        $this->programs = $program
                            ->active()
                            ->orderBy('order')
                            ->get();
    }

    public function render()
    {
        return view('livewire.programs.programs');
    }

}
