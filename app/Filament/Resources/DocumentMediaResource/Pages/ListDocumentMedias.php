<?php

namespace App\Filament\Resources\DocumentMediaResource\Pages;

use App\Filament\Resources\DocumentMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocumentMedias extends ListRecords
{
    protected static string $resource = DocumentMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
