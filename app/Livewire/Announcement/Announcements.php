<?php

namespace App\Livewire\Announcement;

use Livewire\Component;
use App\Models\Announcement;

class Announcements extends Component
{
     public $activeAnnouncements;

    public function mount(Announcement $announcement)
    {
        $this->activeAnnouncements = $announcement->latest()->active()->get();
    }
    public function render()
    {
        return view('livewire.announcement.announcements');
    }
}
