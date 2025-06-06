<?php

namespace App\Models;

use Filament\Forms\Components\Split;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_published',
        'expiry_date',
    ];

    public function dateAndTime()
    {
        // Format like: June 4, 2025 at 5:00 PM
        return \Carbon\Carbon::parse($this->created_at)->format('F j, Y \a\t g:i A');
    }

    public function scopeActive($query)
    {
        return $query->where('is_published', true)
                    ->where(function ($q) {
                        $q->whereNull('expiry_date')
                        ->orWhere('expiry_date', '>', now());
                    });
    }

    public static function getForm(): array
    {
        return [
                Split::make([
                    Section::make('Announcement Details')
                    ->description('')
                        ->schema([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255),
                            RichEditor::make('description')
                                ->required()
                                ->maxLength(255),
                        ]),
                     Section::make('Manage Announcement')
                     ->description('')
                            ->schema([
                                Toggle::make('is_published'),
                                    DateTimePicker::make('expiry_date')
                                        ->native(false),
                            ])->grow(false),
                ])->from('md')
        ];         
    }   
}
