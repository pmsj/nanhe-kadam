<?php

namespace App\Models;

use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = 
    [
        'image_path',
        'title',
        'slug',
        'description',
        'age_group',
        'duration',
        'order',
        'is_active',
    ];

    public function date()
    {
        // Format like: June 4
        return \Carbon\Carbon::parse($this->created_at)->format('F j, Y');
    }

    //display individual by slug
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

     public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
    
    public function getShortTitleAttribute()
    {
        return \Illuminate\Support\Str::words($this->title, 10); // use as short_title
    }

    public function getShortDescriptionAttribute()
    {
        return \Illuminate\Support\Str::words($this->description, 20); // use as short_description
    }
    public static function getForm(): array
    {
        return [
                 Split::make([
                    Section::make('New play school program')
                        ->description('Crate a new program for play school kids')
                        ->schema([
                            Forms\Components\FileUpload::make('image_path')
                                ->image()
                                ->directory('playschool-program-image'),
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state, ?string $operation, ?Program $program) {
                                    
                                    if($operation == 'edit')
                                    {
                                        return;
                                    }

                                    if (($get('slug') ?? '') !== Str::slug($old)) {
                                        return;
                                    }
                                        $set('slug', Str::slug($state));
                                    }),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->helperText('This filed is filled automatically based on the title')
                                ->maxLength(255)
                                ->disabled(fn(?string $operation, ?Program $program) => $operation =='edit'),
                            Forms\Components\RichEditor::make('description')
                                ->columnSpanFull(),
                                    ]),
                    Section::make('Extra Details')
                    ->description('details to be filled as necessary')
                    ->schema([
                        Forms\Components\TextInput::make('age_group')
                                ->hint('(1-2 years)')
                                ->maxLength(255),
                        Forms\Components\TextInput::make('duration')
                            ->hint('(6 months/1 year)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('order')
                            ->helperText('change only when required for display order')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('is_active')
                            ->hint('(toggle to activate)')
                            ->helperText('only active programs will be displayed')
                            ->required(),
                    ])->grow(false),
                 ])->from('lg')
        ];
    }
}
