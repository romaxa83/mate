<?php

namespace App\Filament\Resources\Tags\TagResource\Pages;

use App\Filament\Resources\Tags\TagResource;
use App\Modules\Tag\Dto\TagDto;
use App\Modules\Tag\Models\Tag;
use App\Modules\Tag\Services\TagService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditTag extends EditRecord
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $model, array $data): Model
    {
        /** @var $model Tag */
        /** @var $service TagService */
        $service = resolve(TagService::class);

        return $service->update($model, TagDto::byArgs($data));
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
