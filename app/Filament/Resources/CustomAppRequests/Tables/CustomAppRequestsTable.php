<?php

namespace App\Filament\Resources\CustomAppRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;

class CustomAppRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone_number')
                    ->label('Nomor HP')
                    ->searchable(),

                // Kolom status yang bisa diubah langsung dari tabel
                SelectColumn::make('status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'closed' => 'Selesai',
                    ])
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y, H:i') // Format tanggal lebih manusiawi
                    ->sortable(),
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
