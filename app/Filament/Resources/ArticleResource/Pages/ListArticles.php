<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Support\Enums\IconPosition;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ArticleResource;

class ListArticles extends ListRecords
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
              ->icon('heroicon-m-plus-circle')
            ->iconPosition(IconPosition::Before),
        ];
    }
}
