<?php

namespace App\Filament\Resources\Plans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan nama produk dari relasi
                TextColumn::make('product.name')
                    ->label('Produk')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama Paket')
                    ->searchable(),

                // Format harga agar ada 'Rp' dan pemisah ribuan
                TextColumn::make('price')
                    ->money('IDR') // Format sebagai mata uang Rupiah
                    ->sortable(),

                TextColumn::make('duration_in_months')
                    ->label('Durasi')
                    ->suffix(' bulan') // Tambahkan 'bulan' di belakang angka
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif?')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
