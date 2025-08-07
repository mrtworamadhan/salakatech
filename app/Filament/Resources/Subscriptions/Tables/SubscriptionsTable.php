<?php

namespace App\Filament\Resources\Subscriptions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;

class SubscriptionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable(),

                // Menampilkan nama produk dan nama paket
                TextColumn::make('plan.product.name')
                    ->label('Produk')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('plan.name')
                    ->label('Paket Langganan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('starts_at')
                    ->label('Mulai Sejak')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->label('Berakhir Pada')
                    ->date('d M Y')
                    ->sortable(),

                // Gunakan BadgeColumn agar status terlihat lebih menarik
                BadgeColumn::make('status')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'cancelled',
                        'danger' => 'expired',
                    ])
                    ->searchable(),
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
