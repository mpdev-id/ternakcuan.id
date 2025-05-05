<?php

namespace App\Filament\Resources\CopyWritingResource\Pages;

use App\Filament\Resources\CopyWritingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCopyWritings extends ListRecords
{
    protected static string $resource = CopyWritingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
