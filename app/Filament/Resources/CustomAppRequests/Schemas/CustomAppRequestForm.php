<?php

namespace App\Filament\Resources\CustomAppRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CustomAppRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->disabled(), // Nonaktifkan saat edit

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->disabled(),

                TextInput::make('phone_number')
                    ->label('Nomor HP')
                    ->tel()
                    ->required()
                    ->maxLength(255)
                    ->disabled(),

                Textarea::make('description')
                    ->label('Deskripsi Kebutuhan')
                    ->required()
                    ->columnSpanFull() // Buat field ini jadi satu baris penuh
                    ->disabled(),

                // Ini satu-satunya field yang bisa diubah admin
                Select::make('status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'closed' => 'Selesai',
                    ])
                    ->required(),
            ]);
    }
}
