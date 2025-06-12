<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\SchoolHour;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SchoolHourResource\Pages;
use App\Filament\Resources\SchoolHourResource\RelationManagers;

class SchoolHourResource extends Resource
{
    protected static ?string $model = SchoolHour::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 4; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema(SchoolHour::getForm())->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->persistFiltersInSession()
            ->columns([
                Tables\Columns\TextColumn::make('day_of_week')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->label('Day Order'),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
                 Tables\Columns\TextColumn::make('schedule.label')
                    ->searchable()
                    ->badge()
                     ->color(fn ($record) => match ($record->school_schedule_id) {
                        1 => 'primary',
                        2 => 'info',
                        3 => 'warning',
                        4 => 'danger',
                        default => 'gray',
                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSchoolHours::route('/'),
            'create' => Pages\CreateSchoolHour::route('/create'),
            'edit' => Pages\EditSchoolHour::route('/{record}/edit'),
        ];
    }
}
