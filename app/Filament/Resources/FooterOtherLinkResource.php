<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterOtherLinkResource\Pages;
use App\Filament\Resources\FooterOtherLinkResource\RelationManagers;
use App\Models\FooterOtherLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterOtherLinkResource extends Resource
{
    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 13; 
    
    protected static ?string $model = FooterOtherLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FooterOtherLink::getForm())->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('other_link_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('other_link_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('section_id')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active'),
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
            'index' => Pages\ListFooterOtherLinks::route('/'),
            'create' => Pages\CreateFooterOtherLink::route('/create'),
            'edit' => Pages\EditFooterOtherLink::route('/{record}/edit'),
        ];
    }
}
