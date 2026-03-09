<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\IconEntry;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Product Info')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Product Name')
                            ->weight('bold')
                            ->color('primary'),
                        
                        TextEntry::make('id')
                            ->label('Product ID'),

                        // 1. Tambahkan badge untuk SKU dengan warna info (biru)
                        TextEntry::make('sku')
                            ->label('Product SKU')
                            ->badge()
                            ->color('info'),

                        TextEntry::make('description')
                            ->label('Product Description')
                            ->markdown(), // Mengaktifkan render markdown agar tampilan rapi
                            
                        TextEntry::make('created_at')
                            ->label('Product Creation Date')
                            ->date('d M Y')
                            ->color('info'),
                    ])
                    ->columnSpanFull(),

                Section::make('Pricing & Stock')
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Product Image')
                            ->disk('public')
                            ->columnSpanFull(),

                        // 3. Tambahkan format harga menjadi Rp
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->icon('heroicon-o-currency-dollar')
                            ->formatStateUsing(fn (string $state): string => 'Rp ' . number_format($state, 0, ',', '.')),

                        // 2. Tambahkan icon pada Stock
                        TextEntry::make('stock')
                            ->label('Product Stock')
                            ->icon('heroicon-o-cube'), // Menggunakan icon cube agar konsisten dengan tabel

                        IconEntry::make('is_active')
                            ->label('Is Active')
                            ->boolean(),
                            
                        IconEntry::make('is_featured')
                            ->label('Is Featured')
                            ->boolean(),
                    ])->columns(2),
            ]);
    }
}