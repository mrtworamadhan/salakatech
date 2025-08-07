<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str; // Pastikan ini ada di atas
use Filament\Schemas\Components\Utilities\Set;// Pastikan ini juga ada
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->maxLength(255)
                // live(onBlur: true) artinya setelah selesai mengetik nama,
                // field slug akan ter-update otomatis
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true) // Pastikan slug unik
                    ->readOnly(),

                TextInput::make('tagline')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('icon_path')
                    ->label('Icon')
                    ->image() // Hanya menerima file gambar
                    ->disk('public')
                    ->visibility('public')
                    ->directory('product-icons'), // Simpan di folder storage/app/public/product-icons

                Toggle::make('is_active')
                    ->label('Active?')
                    ->required(),
            ]);
    }
}
