<?php

namespace App\Filament\Resources\CommitteeMemberResource\Pages;

use App\Filament\Resources\CommitteeMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommitteeMember extends EditRecord
{
    protected static string $resource = CommitteeMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeFill(array $data): array
    {

        // Decode the JSON 'social_media_links' back into an array
        if (isset($data['social_media_links'])) {
            $socialMediaLinks = json_decode($data['social_media_links'], true);
            
            // Separate the individual social media fields
            $data['facebook'] = $socialMediaLinks['facebook'] ?? null;
            $data['instagram'] = $socialMediaLinks['instagram'] ?? null;
            $data['x'] = $socialMediaLinks['x'] ?? null;
        }

        return $data;
    }



}
