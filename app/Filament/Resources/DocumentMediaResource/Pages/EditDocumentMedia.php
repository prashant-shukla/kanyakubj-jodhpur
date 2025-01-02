<?php

namespace App\Filament\Resources\DocumentMediaResource\Pages;

use App\Filament\Resources\DocumentMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocumentMedia extends EditRecord
{
    protected static string $resource = DocumentMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
