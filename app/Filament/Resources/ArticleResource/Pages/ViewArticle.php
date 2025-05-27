<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use App\Models\Article;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ArticleResource;

class ViewArticle extends ViewRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
         return [Actions\EditAction::make()
            ->slideOver()
            ->form(Article::getForm())
    ];
    }
}
