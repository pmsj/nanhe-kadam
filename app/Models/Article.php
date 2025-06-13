<?php

namespace App\Models;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Spatie\MediaLibrary\InteractsWithMedia;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class Article extends Model implements HasMedia
{
   use InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body'
    ];

    public function getImageUrlAttribute(): ?string
    {
        return $this->getFirstMediaUrl('article-images');
    }

        //display individual by slug
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //function to truncate Article->body
    public function truncatedBody()
    {
        return Str::words($this->body, 30); // Truncate after 30 words
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
                  Section::make('Write a new article')
                    ->schema([
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
                        SpatieMediaLibraryFileUpload::make('images')
                            ->label('Article\'s Photo')
                            ->collection('article-images')
                            ->image()
                            ->rules(['image', 'mimes:jpg,jpeg,png,webp']) 
                            ->imageEditor()
                            ->columnSpanFull(),
                        RichEditor::make('body')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2)
        ];
    }
}
