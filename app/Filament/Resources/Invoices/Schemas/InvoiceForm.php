<?php

namespace App\Filament\Resources\Invoices\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('invoice_number')
                    ->label('Nomor Invoice')
                    ->required()
                    ->disabled(),

                Select::make('user_id')
                    ->label('Pelanggan')
                    ->relationship('user', 'name')
                    ->required()
                    ->disabled(),

                // Menampilkan info langganan terkait (jika ada)
                Select::make('subscription_id')
                    ->label('Langganan Terkait')
                    ->relationship('subscription', 'id')
                    ->disabled(),

                TextInput::make('amount')
                    ->label('Jumlah Tagihan')
                    ->numeric()
                    ->prefix('Rp')
                    ->required()
                    ->disabled(),

                TextInput::make('status')
                    ->required()
                    ->disabled(),

                TextInput::make('payment_gateway_reference')
                    ->label('ID Transaksi Gateway')
                    ->disabled(),

                TextInput::make('paid_at')
                    ->label('Tanggal Dibayar')
                    ->disabled(),
            ]);
    }
}
