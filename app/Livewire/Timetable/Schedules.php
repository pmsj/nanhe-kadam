<?php

namespace App\Livewire\Timetable;

use App\Models\SchoolHour;
use App\Models\SchoolSchedule;
use Livewire\Component;

class Schedules extends Component
{
    public $schedules;
    public function mount(SchoolSchedule $scheduleType, SchoolHour $dayAndHours)
    {
        
        $this->schedules = $dayAndHours
                            ->with(['schedule'])
                            ->withActiveSchedule()
                            ->orderBy('order')
                            ->get();
    }

    public function render()
    {
        return view('livewire.timetable.schedules');
    }
}
