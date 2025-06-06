<?php

namespace App\Models;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class Article extends Model
{
   
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //function to truncate Article->body
    public function truncatedBody()
    {
        return Str::words($this->body, 15); // Truncate after 30 words
    }

    public function truncatedTitle()
    {
        return Str::words($this->title, 8); // Truncate after 30 words
    }
    
    // In your Article model (e.g., Article.php)
    public function getReadTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->body));
        $averageReadingSpeed = 200; // words per minute
        $readTime = ceil($wordCount / $averageReadingSpeed);

        return $readTime; //accessed as [ read_time ] in the view
    }

    public static function countByUser(User $user): int
    {
        return static::where('user_id', $user->id)->count();
    }

    public static function getForm(): array
    {
        return [
                    TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                     ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state, ?string $operation, ?Article $article) {
                        
                        if($operation == 'edit')
                        {
                            return;
                        }

                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }
                            $set('slug', Str::slug($state));
                        }),
                TextInput::make('slug')
                    ->required()
                    ->helperText('This filed is filled automatically based on the title')
                    ->maxLength(255)
                    ->disabled(fn(?string $operation, ?Article $article) => $operation =='edit'),
                RichEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
        ];
    }
}
