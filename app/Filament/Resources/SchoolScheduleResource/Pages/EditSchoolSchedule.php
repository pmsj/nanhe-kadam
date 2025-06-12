<?php

namespace App\Filament\Resources\SchoolScheduleResource\Pages;

use App\Filament\Resources\SchoolScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchoolSchedule extends EditRecord
{
    protected static string $resource = SchoolScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
