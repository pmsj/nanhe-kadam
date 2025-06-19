<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;

class FooterOtherLink extends Model
{
     public $timestamps = false;
    
    protected $fillable = [
        'other_link_title',
        'other_link_url',
        'is_active',
        'section_id',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }


    public static function getForm(): array
    {
        return [
            Split::make([
                Section::make('Footer Info Links')
                ->description('These links will appear in the footer section under "Other"')
                    ->schema([
                        Forms\Components\TextInput::make('other_link_title')
                            ->hint('menu name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('other_link_url')
                            ->hint('route name')
                            ->placeholder('eg: articles')
                            ->helperText('route name should match "actual route name" ')
                            ->required()
                            ->maxLength(255),
                         Forms\Components\TextInput::make('section_id')
                            ->placeholder('eg: #announcements')
                            ->helperText('is used to target a particular section on a page')
                    ]),
                 Section::make('Activation Toggle')
                ->description('only "active links" will appear in the footer section')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->required(),
                    ])->grow(false),
            ])->from('md')
        ];
    }
}
