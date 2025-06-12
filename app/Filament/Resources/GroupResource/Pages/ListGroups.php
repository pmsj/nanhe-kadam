<?php

namespace App\Filament\Resources\GroupResource\Pages;

use Filament\Actions;
use Filament\Support\Enums\IconPosition;
use App\Filament\Resources\GroupResource;
use Filament\Resources\Pages\ListRecords;

class ListGroups extends ListRecords
{
    protected static string $resource = GroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
             ->icon('heroicon-m-plus-circle')
            ->iconPosition(IconPosition::Before),
        ];
    }
}
