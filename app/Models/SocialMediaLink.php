<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
        public $timestamps = false;

    protected $fillable = [
        'youtube_url',        
        'facebook_url',        
        'instagram_url',        
        'linkedin_url',        
        'twitter_url',        
    ];

    

    public static function getForm(): array
    {
        return [
                Split::make([
                    Section::make()
                        ->schema([
                            Forms\Components\TextInput::make('youtube_url')
                                ->helperText('https://www.youtube.com/')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('facebook_url')
                                ->helperText('https://www.facebook.com/your.username')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('instagram_url')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('linkedin_url')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('twitter_url')
                                ->maxLength(255),
                        ])
                ])
        ];
    }
}
