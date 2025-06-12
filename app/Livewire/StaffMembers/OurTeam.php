<?php

namespace App\Livewire\StaffMembers;

use App\Models\Staff;
use Livewire\Component;

class OurTeam extends Component
{
    public $staff;
    
    public function mount()
    {
        $this->staff = Staff::with('user')->latest()->get();
    }
    public function render()
    {
        return view('livewire.staff-members.our-team');
    }
}
