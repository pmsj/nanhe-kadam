<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;


use App\Models\Announcement;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\AnnouncementResource;
use Filament\Actions\EditAction;

class ViewAnnouncement extends ViewRecord
{
    protected static string $resource = AnnouncementResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
            ->form(Announcement::getForm())
        ];
    }
}
