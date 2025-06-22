<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterInfoLinkResource\Pages;
use App\Filament\Resources\FooterInfoLinkResource\RelationManagers;
use App\Models\FooterInfoLink;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterInfoLinkResource extends Resource
{

    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 12; 

    protected static ?string $model = FooterInfoLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FooterInfoLink::getForm())->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('info_link_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('info_link_url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListFooterInfoLinks::route('/'),
            'create' => Pages\CreateFooterInfoLink::route('/create'),
            'edit' => Pages\EditFooterInfoLink::route('/{record}/edit'),
        ];
    }
}
