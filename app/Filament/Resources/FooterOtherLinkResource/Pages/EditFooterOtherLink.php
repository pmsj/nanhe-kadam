<?php

namespace App\Filament\Resources\FooterOtherLinkResource\Pages;

use App\Filament\Resources\FooterOtherLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterOtherLink extends EditRecord
{
    protected static string $resource = FooterOtherLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
