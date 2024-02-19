<?php

namespace App\Filament\Resources\Tags\TagResource\Pages;

use App\Filament\Resources\Tags\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTag extends ListRecords
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
