<?php

namespace App\Filament\Resources\ImageCarouselResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ImageCarouselResource;
use App\Models\ImageCarousel;

class EditImageCarousel extends EditRecord
{
    protected static string $resource = ImageCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getActions(): array
    {
        return [
        Actions\DeleteAction::make()
        ->after(function (ImageCarousel $record) {
            // delete single
            if ($record->photo) {
                Storage::disk('public')->delete($record->photo);
            }
            // delete multiple
            if ($record->galery) {
                foreach ($record->galery as $ph) Storage::disk('public')->delete($ph);
            }
        }),
        ];
    }
}
