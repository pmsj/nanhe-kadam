<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class Announcements extends Component
{
   public bool $showDrawer3 = false;

protected $listeners = ['openDrawer3' => 'openDrawer'];

public function openDrawer()
{
    $this->showDrawer3 = true;
}

    

    public function render()
    {
        return view('livewire.announcements');
    }
}
