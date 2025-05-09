<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoResource\Pages;
use App\Filament\Resources\SeoResource\RelationManagers;
use App\Models\Seo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeoResource extends Resource
{
    protected static ?string $model = Seo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'SEO ';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('meta_title')
                    ->required()
                    ->maxLength(255)
                    ->default('Ternak Cuan - Your Pasif Income Solution'),
                Forms\Components\Textarea::make('meta_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_keywords')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('meta_author')
                    ->required()
                    ->maxLength(255)
                    ->default('Ternak Cuan'),
                Forms\Components\TextInput::make('meta_robots')
                    ->required()
                    ->maxLength(255)
                    ->default('index, follow'),
                Forms\Components\TextInput::make('meta_canonical')
                    ->required()
                    ->maxLength(255)
                    ->default('https://ternakcuan.id/'),
                Forms\Components\TextInput::make('canonical_url')
                    ->required()
                    ->maxLength(255)
                    ->default('https://ternakcuan.id/'),
                Forms\Components\TextInput::make('robots')
                    ->required()
                    ->maxLength(255)
                    ->default('index,follow'),
                Forms\Components\TextInput::make('og_title')
                    ->required()
                    ->maxLength(255)
                    ->default('Ternak Cuan - Your Pasif Income Solution'),
                Forms\Components\Textarea::make('og_description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('og_image')
                    ->image()
                    ->imageEditor()
                    ->maxSize(1024)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('twitter_title')
                    ->required()
                    ->maxLength(255)
                    ->default('Ternak Cuan - Your Pasif Income Solution'),
                Forms\Components\Textarea::make('twitter_description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('twitter_image')
                    ->image()
                    ->imageEditor()
                    ->maxSize(1024)
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_robots')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_canonical')
                    ->searchable(),
                Tables\Columns\TextColumn::make('canonical_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('robots')
                    ->searchable(),
                Tables\Columns\TextColumn::make('og_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('og_image'),
                Tables\Columns\TextColumn::make('twitter_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('twitter_image'),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSeos::route('/'),
            // 'create' => Pages\CreateSeo::route('/create'),
            // 'edit' => Pages\EditSeo::route('/{record}/edit'),
        ];
    }
}
