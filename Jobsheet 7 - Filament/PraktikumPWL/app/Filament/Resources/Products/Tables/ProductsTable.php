<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('sku')->searchable()->sortable(),
                TextColumn::make('description')->searchable()->sortable(),
                TextColumn::make('price')->searchable()->sortable(),
                TextColumn::make('stock')->searchable()->sortable(),
                ImageColumn::make('image')
                    ->disk('public')->searchable()->sortable(),
                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        '1', 'true' => 'success',
                        '0', 'false' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn(string $state): string => $state ? 'Aktif' : 'Non-Aktif')
                    ->sortable(),

                TextColumn::make('is_featured')
                    ->label('Unggulan')
                    ->badge()
                    ->color(fn(string $state): string => $state ? 'warning' : 'gray')
                    ->formatStateUsing(fn(string $state): string => $state ? 'Ya' : 'Tidak')
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
