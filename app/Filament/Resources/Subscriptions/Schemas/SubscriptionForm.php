<?php

namespace App\Filament\Resources\Subscriptions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                ->relationship('user', 'name') // 'user' = nama relasi, 'name' = kolom yg tampil
                ->searchable()
                ->required()
                ->disabled(), // Dibuat disabled karena ini hanya untuk tampilan

                // Dropdown untuk memilih paket yang dilanggan
                Select::make('plan_id')
                    ->relationship('plan', 'name') // 'plan' = nama relasi, 'name' = kolom yg tampil
                    ->searchable()
                    ->required()
                    ->disabled(),

                // Field tanggal mulai dan berakhir dibuat read-only
                DatePicker::make('starts_at')
                    ->label('Mulai Sejak')
                    ->required()
                    ->disabled(),

                DatePicker::make('ends_at')
                    ->label('Berakhir Pada')
                    ->required()
                    ->disabled(),

                // Status juga read-only, akan di-update oleh sistem
                TextInput::make('status')
                    ->required()
                    ->disabled(),
            ]);
    }
}
