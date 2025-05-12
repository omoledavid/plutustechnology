<?php

namespace App\Filament\Resources\PageSectionResource\Pages;

use App\Filament\Resources\PageSectionResource;
use Filament\Resources\Pages\ManageRecords;
use Filament\Actions;

class ManagePageSections extends ManageRecords
{
    protected static string $resource = PageSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add New Section'),
        ];
    }

    public function mutateFormDataBeforeSave(array $data): array
    {
        // Ensure content and settings are properly formatted
        $data['content'] = $data['content'] ?? [];
        $data['settings'] = $data['settings'] ?? [];

        return $data;
    }
}