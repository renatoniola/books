<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Resources\Pages\CreateRecord;
use App\Services\UtilsService;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Temporary slug till Id is generated
        $data['book_slug']  = md5(microtime()) .  $data['book_title'];
        return $data;
    }

    protected function afterCreate(): void
    {
        if (
            isset($this->record->book_slug) &&
            isset($this->record->id) &&
            isset($this->record->book_title)
        ) {
            $this->record->book_slug = UtilsService::generateSlug($this->record->id, $this->record->book_title);
            $this->record->save();
        }
    }
}
