<?php

namespace App\Filament\Resources\HistoricalPhotoResource\Pages;

use App\Filament\Resources\HistoricalPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoricalPhotos extends ListRecords
{
    protected static string $resource = HistoricalPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
