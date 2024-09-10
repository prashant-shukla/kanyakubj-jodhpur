<?php

namespace App\Filament\Resources\CommunityImpactResource\Pages;

use App\Filament\Resources\CommunityImpactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommunityImpact extends EditRecord
{
    protected static string $resource = CommunityImpactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
