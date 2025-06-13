<?php

namespace App\Models;

use Filament\Forms;
use Spatie\MediaLibrary\HasMedia;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class Staff extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'designation',
        'qualification',
        'experience',
        'bio',
        'user_id',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public static function getForm(): array
    {
        return [
           Split::make([
                Section::make('Staff Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('designation')
                            ->hint('Teacher/Director...')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('qualification')
                            ->hint('UG, PG, B.ED, TTC, etc.')
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('bio')
                            ->hint('Some description about oneself')
                            ->columnSpanFull(),
                    ]),
                      Section::make('Extra Details')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('images')
                                ->label('Staff\'s Photo')
                                ->collection('staff-images')
                                ->image()
                                ->rules(['image', 'mimes:jpg,jpeg,png,webp']) 
                                ->imageEditor(),
                            Forms\Components\Select::make('user_id')
                                ->label('User')
                                ->helperText('Associate staff details with the same user as staff')
                                ->relationship('user', 'name') // assumes User has 'name' field
                                ->searchable()
                                ->preload()
                                ->nullable(), // optional: if staff can exist without user
                            Forms\Components\TextInput::make('experience')
                                ->helperText('example: 2 years')
                                ->maxLength(255),
                            Forms\Components\Toggle::make('is_active')
                                ->helperText('Only when active, displays on website')
                                ->required(),
                            ])->grow(false)
           ])->from('md')
        ];
    }
}
