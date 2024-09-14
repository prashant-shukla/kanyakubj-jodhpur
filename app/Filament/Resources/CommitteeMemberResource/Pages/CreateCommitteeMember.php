<?php

namespace App\Filament\Resources\CommitteeMemberResource\Pages;

use App\Filament\Resources\CommitteeMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCommitteeMember extends CreateRecord
{
    protected static string $resource = CommitteeMemberResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Combine the social media links into an array
        $socialMediaLinks = [
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'x' => $data['x'], // assuming 'x' is the social media formerly known as Twitter
        ];

        // Convert the array to JSON and store it in the 'social_media_links' field
        $data['social_media_links'] = json_encode($socialMediaLinks);

        return $data;
    }
}
