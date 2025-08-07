<?php

namespace App\Filament\Resources\CustomAppRequests;

use App\Filament\Resources\CustomAppRequests\Pages\CreateCustomAppRequest;
use App\Filament\Resources\CustomAppRequests\Pages\EditCustomAppRequest;
use App\Filament\Resources\CustomAppRequests\Pages\ListCustomAppRequests;
use App\Filament\Resources\CustomAppRequests\Pages\ViewCustomAppRequest;
use App\Filament\Resources\CustomAppRequests\Schemas\CustomAppRequestForm;
use App\Filament\Resources\CustomAppRequests\Schemas\CustomAppRequestInfolist;
use App\Filament\Resources\CustomAppRequests\Tables\CustomAppRequestsTable;
use App\Models\CustomAppRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CustomAppRequestResource extends Resource
{
    protected static ?string $model = CustomAppRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShoppingCart;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CustomAppRequestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CustomAppRequestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomAppRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomAppRequests::route('/'),
            'create' => CreateCustomAppRequest::route('/create'),
            'view' => ViewCustomAppRequest::route('/{record}'),
            'edit' => EditCustomAppRequest::route('/{record}/edit'),
        ];
    }
}
