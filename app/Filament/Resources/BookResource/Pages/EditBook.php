<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;
use App\Services\UtilsService;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($this->record->book_slug)) {
            Cache::forget('book.' . $this->record->book_slug);
        }
        if (isset($this->record->id)) {
            $data['book_slug'] = UtilsService::generateSlug($this->record->id, $data['book_title']);
        }
        return $data;
    }

    protected function afterSave(): void
    {
        $this->fillForm();
    }
}
