<?php

namespace App\Filament\Resources\SchoolHourResource\Pages;

use App\Filament\Resources\SchoolHourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchoolHour extends EditRecord
{
    protected static string $resource = SchoolHourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
