<?php

namespace App\Filament\Resources\Plans\Schemas;

use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;

class PlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('product_id')
                ->relationship('product', 'name') // 'product' adalah nama relasi di model Plan, 'name' adalah kolom yang ditampilkan
                ->required()
                ->searchable()
                ->preload(), // Langsung load data produk saat halaman dibuka

                TextInput::make('name')
                    ->label('Nama Paket') // e.g., 'Basic', 'Pro', 'Enterprise'
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->readOnly(),

                // Input untuk harga dengan prefix 'Rp'
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                TextInput::make('duration_in_months')
                    ->label('Durasi (Bulan)')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->default(1),

                // Textarea untuk fitur, kita akan pakai fitur 'TagsInput' agar lebih keren
                \Filament\Forms\Components\TagsInput::make('features')
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktif?')
                    ->required(),
            ]);
    }
}
