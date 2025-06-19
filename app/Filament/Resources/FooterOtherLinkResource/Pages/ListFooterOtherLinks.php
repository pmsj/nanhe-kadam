<?php

namespace App\Filament\Resources\FooterOtherLinkResource\Pages;

use App\Filament\Resources\FooterOtherLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFooterOtherLinks extends ListRecords
{
    protected static string $resource = FooterOtherLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
