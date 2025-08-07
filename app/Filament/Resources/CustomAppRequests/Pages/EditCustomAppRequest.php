<?php

namespace App\Filament\Resources\CustomAppRequests\Pages;

use App\Filament\Resources\CustomAppRequests\CustomAppRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCustomAppRequest extends EditRecord
{
    protected static string $resource = CustomAppRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
