<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ImageCarousel;
use Filament\Resources\Resource;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ImageCarouselResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ImageCarouselResource\RelationManagers;

class ImageCarouselResource extends Resource
{
    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 1; 
    
    protected static ?string $model = ImageCarousel::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Split::make([
                    Section::make([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->required(),
                    ]),
                    Section::make([
                        SpatieMediaLibraryFileUpload::make('images')
                        ->label('Carousel Image')
                        ->collection('carousel-images')
                        ->image()
                        ->rules(['image', 'mimes:jpg,jpeg,png,webp']) 
                        ->imageEditor()
                        ->required(),
                        Forms\Components\TextInput::make('url')
                            ->hint('for action button')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('urlText')
                            ->label('Name for Action Button')
                            ->helperText('eg: Admission/Contact etc.')
                            ->maxLength(255),
                    ]),
               ])->from('md')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('carousel-images'),
                Tables\Columns\TextColumn::make('title')
                    ->words(5)
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->words(2)
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('urlText')
                    ->words(3)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImageCarousels::route('/'),
            'create' => Pages\CreateImageCarousel::route('/create'),
            'edit' => Pages\EditImageCarousel::route('/{record}/edit'),
        ];
    }
}
