<?php

namespace App\Filament\Resources\Tags\TagResource\Pages;

use App\Filament\Resources\Tags\TagResource;
use App\Modules\Tag\Dto\TagDto;
use App\Modules\Tag\Services\TagService;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        /** @var $service TagService */
        $service = resolve(TagService::class);

        return $service->create(TagDto::byArgs($data), auth_user());
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
