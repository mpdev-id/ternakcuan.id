<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CopyWritingResource\Pages;
use App\Filament\Resources\CopyWritingResource\RelationManagers;
use App\Models\CopyWriting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CopyWritingResource extends Resource
{
    protected static ?string $model = CopyWriting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'First Section ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('company_video')
                    ->required()
                    ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg','image/jpeg', 'image/png', 'image/gif'])
                    // ->maxSize(4096)
                    // ->storeFileNamesUsing(function (string $name, array $data): string {
                    //     return $data['record']->id . '-' . $name;})
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('headline')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(100),
                Forms\Components\Textarea::make('subheadline')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('CTAButton')
                    ->required()
                    ->label('CTA Button')
                    ->maxLength(255),
                Forms\Components\TextInput::make('CTAlink')
                    ->required()
                    ->label('CTA Link')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('company_video')
                    ->size(50, 50)
                    ->rounded()
                    ->label('Company Video'),
                Tables\Columns\TextColumn::make('headline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTAButton')
                    ->label('CTA Button')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTAlink')
                    ->label('CTA Link')
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
            'index' => Pages\ListCopyWritings::route('/'),
            // 'create' => Pages\CreateCopyWriting::route('/create'),
            // 'edit' => Pages\EditCopyWriting::route('/{record}/edit'),
        ];
    }
}
