<?php

namespace App\Filament\Resources\FooterInfoLinkResource\Pages;

use App\Filament\Resources\FooterInfoLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterInfoLink extends EditRecord
{
    protected static string $resource = FooterInfoLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
