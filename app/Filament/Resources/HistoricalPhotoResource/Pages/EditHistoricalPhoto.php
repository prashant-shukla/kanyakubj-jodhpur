<?php

namespace App\Filament\Resources\HistoricalPhotoResource\Pages;

use App\Filament\Resources\HistoricalPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoricalPhoto extends EditRecord
{
    protected static string $resource = HistoricalPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
