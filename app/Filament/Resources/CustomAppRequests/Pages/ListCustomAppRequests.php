<?php

namespace App\Filament\Resources\CustomAppRequests\Pages;

use App\Filament\Resources\CustomAppRequests\CustomAppRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCustomAppRequests extends ListRecords
{
    protected static string $resource = CustomAppRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
