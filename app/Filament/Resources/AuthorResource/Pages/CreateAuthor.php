<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Resources\Pages\CreateRecord;
use App\Services\UtilsService;

class CreateAuthor extends CreateRecord
{
    protected static string $resource = AuthorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Temporary slug till Id is generated
        $data['author_slug']  = UtilsService::generateSlug(0, ".{md5(microtime())}.{$data['author_name']} {$data['author_lastname']}");
        return $data;
    }

    protected function afterCreate(): void
    {
        $this->record->author_slug = UtilsService::generateSlug($this->record->id, "{$this->record->author_name} {$this->record->author_lastname}");
        if (isset($this->record)) {
            try {
                $this->record->save();
            } catch (\Exception $e) {
                // $e->getMessage();
            }
        }
    }
}
