<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebConfigResource\Pages;
use App\Filament\Resources\WebConfigResource\RelationManagers;
use App\Models\WebConfig;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebConfigResource extends Resource
{
    protected static ?string $model = WebConfig::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Website Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')
                    ->acceptedFileTypes(['image/*'])
                    ->image()
                    ->maxSize(2024)
                    ->imageEditor()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('favicon')
                    ->acceptedFileTypes(['image/ico', 'image/png'])
                    ->image()
                    ->maxSize(1024)
                    ->imageEditor()
                    ->columnSpanFull()
                    ->default('https://ternakcuan.id/asset/favicon.ico')
                    ,
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default('Ternak Cuan'),
                Forms\Components\TextInput::make('main_title')
                    ->maxLength(255)
                    ->default('PT SAHABAT DWIKARYA DIGITAL'),
                Forms\Components\TextInput::make('main_address')
                    ->maxLength(255),
                Forms\Components\ColorPicker::make('main_color')
                    ->required()
                    ->default('#8C26DFFF'),
                Forms\Components\TextInput::make('main_description')
                    ->maxLength(255)
                    ->default('create your passive income'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255)
                    ->prefix('+62'),
                Forms\Components\TextInput::make('email')
                    ->rules(['regex:/^[\w\.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'])
                    ->maxLength(255),
                Forms\Components\Wizard::make([
                    Forms\Components\Wizard\Step::make('Facebook')
                        ->schema([
                            Forms\Components\TextInput::make('facebook')
                                ->maxLength(255),
                        ]),
                    Forms\Components\Wizard\Step::make('instagram')
                        ->schema([
                            Forms\Components\TextInput::make('instagram')
                                ->maxLength(255),

                        ]),
                    Forms\Components\Wizard\Step::make('twitter')
                        ->schema([
                            Forms\Components\TextInput::make('twitter')
                                ->maxLength(255),
                        ]),
                    Forms\Components\Wizard\Step::make('youtube')
                        ->schema([
                            Forms\Components\TextInput::make('youtube')
                                ->maxLength(255),
                        ]),
                    Forms\Components\Wizard\Step::make('linkedin')
                        ->schema([
                            Forms\Components\TextInput::make('linkedin')
                                ->maxLength(255),
                        ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('favicon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('main_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('main_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('main_color')
                    ->formatStateUsing(fn (string $state): string => '<span class="inline-block w-4 h-4 rounded-full" style="background-color: ' . $state . '"></span>'),
                Tables\Columns\TextColumn::make('main_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('youtube')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedin')
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
            'index' => Pages\ListWebConfigs::route('/'),
            // 'create' => Pages\CreateWebConfig::route('/create'),
            // 'edit' => Pages\EditWebConfig::route('/{record}/edit'),
        ];
    }
}
