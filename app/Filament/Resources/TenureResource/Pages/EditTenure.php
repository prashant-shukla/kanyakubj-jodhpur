<?php

namespace App\Filament\Resources\TenureResource\Pages;

use App\Filament\Resources\TenureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTenure extends EditRecord
{
    protected static string $resource = TenureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
