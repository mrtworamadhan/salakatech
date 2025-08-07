<?php

namespace App\Filament\Resources\CustomAppRequests\Pages;

use App\Filament\Resources\CustomAppRequests\CustomAppRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomAppRequest extends ViewRecord
{
    protected static string $resource = CustomAppRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
