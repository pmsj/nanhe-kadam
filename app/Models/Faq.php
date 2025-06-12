<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
  public $timestamps = false;
  
  protected $fillable = [
    'question',
    'answer',
    'order',
  ];
    public static function getForm(): array
    {
        return [
                   Section::make()
                   ->schema([
                        Forms\Components\TextInput::make('question')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('answer')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('order')
                    ->helperText('This sets the order in which the question will appear')
                    ->required()
                    ->numeric()
                    ->default(1),
                   ])
        ];
    }
}
