<?php

namespace App\Filament\Resources\CopyWritingResource\Pages;

use App\Filament\Resources\CopyWritingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCopyWriting extends EditRecord
{
    protected static string $resource = CopyWritingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
