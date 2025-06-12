<?php

namespace App\Livewire\Programs;

use App\Models\Program;
use Livewire\Component;

class IndividualProgram extends Component
{
    public Program $program;

    public function mount(Program $program)
    {
        $this->program = $program;
    }
    public function render()
    {
        return view('livewire.programs.individual-program');
    }
}
