<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Infolists\Components\Group;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Filament\Resources\ArticleResource\Pages\ViewArticle;
use Filament\Infolists\Components\Section as ComponentsSection;

class ArticleResource extends Resource
{
    protected static ?string $navigationGroup = 'Website';
    protected static ?int $navigationSort = 7; 

    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(Article::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Author')
                    ->numeric()
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('images')
                    ->label('Article\'s Photo')
                    ->extraImgAttributes(['class' => 'rounded-lg'])
                    ->collection('article-images'),
                Tables\Columns\TextColumn::make('title')
                    ->words(7)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
               Section::make('Author Details')
                    ->collapsible()
                    ->columns(3)
                    ->schema([
                        ImageEntry::make('user.avatar_url')
                        ->label('Avatar')
                        ->circular(),
                        Group::make()
                            ->columnSpan(2)
                            ->columns(2)
                            ->schema([
                                TextEntry::make('user.name')
                                    ->label('Author'),
                                TextEntry::make('user.email')
                                    ->label('Author Email'),
                                TextEntry::make('Total Articles Written'),
                                TextEntry::make('created_at'),
                            ]),
                ]),
                Section::make('Article Details')
                ->collapsible()
                ->schema([
                  ImageEntry::make('image_url')
                    ->label('Article\'s Photo')
                    ->extraImgAttributes(['class' => 'rounded-lg'])
                    ->extraAttributes(['class' => 'rounded-lg w-auto h-auto max-w-full rounded-lg'])
                   ->hidden(fn ($record) => !$record->image_url),
                    TextEntry::make('title'),
                    TextEntry::make('body')
                    ->html(),
                ])
                    
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            // 'edit' => Pages\EditArticle::route('/{record}/edit'),
            'view' => Pages\ViewArticle::route('/{record}'),
        ];
    }
}
