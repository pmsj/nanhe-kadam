<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class AboutUs extends Model  implements HasMedia
{
    use InteractsWithMedia;
     protected $fillable = [
        'title',
        'slug',
        'description',
        'order',
        'is_active',
    ];

    public function scopeActive($query)
        {
            return $query->where('is_active', true);
        }

     public static function getForm(): array
    {
        return [
           Split::make([
            Section::make()
                ->schema([
                        SpatieMediaLibraryFileUpload::make('images')
                        ->label('Image for About-us section')
                        ->collection('aboutus-images')
                        ->image()
                        ->rules(['image', 'mimes:jpg,jpeg,png,webp']) 
                        ->imageEditor(),
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state, ?string $operation, ?AboutUs $aboutUs) {

                                if($operation == 'edit')
                                {
                                    return;
                                }

                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }
                                    $set('slug', Str::slug($state));
                                }),
                        Forms\Components\TextInput::make('slug')
                            ->maxLength(255)
                            ->disabled(fn(?string $operation, ?AboutUs $aboutUs) => $operation =='edit'),
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                 Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('is_active')
                            ->required(),
                    ])->grow(false),
           ])->from('md')
        ];
    }

}
