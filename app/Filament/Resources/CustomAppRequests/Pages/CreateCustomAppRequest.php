<?php

namespace App\Filament\Resources\CustomAppRequests\Pages;

use App\Filament\Resources\CustomAppRequests\CustomAppRequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomAppRequest extends CreateRecord
{
    protected static string $resource = CustomAppRequestResource::class;
}
