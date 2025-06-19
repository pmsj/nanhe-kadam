<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;

class WelcomeMessage extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'subtitle_one',
        'subtitle_two',
    ];

     public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

     public static function getForm(): array
    {
        return [
            Split::make([
                Section::make('Welcome Message')
                ->description('This text will appear on the landing page (create it only once).')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->helperText('Eg: School name/Brand name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subtitle_one')
                            ->helperText('Eg: type of school')
                            ->placeholder('Play School')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subtitle_two')
                            ->helperText('Any inspiring Quote')
                            ->required()
                            ->maxLength(255),
                            ]),
                        Section::make('Activation Toggle')
                        ->description(' "This Message" displays only when its active')
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->required(),
                            ])->grow(false),
            ])->from('md')
        ];
    }

}
