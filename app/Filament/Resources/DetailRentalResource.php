<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailRentalResource\Pages;
use App\Filament\Resources\DetailRentalResource\RelationManagers;
use App\Models\detail_rental;
use App\Models\DetailRental;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailRentalResource extends Resource
{
    protected static ?string $model = detail_rental::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('rental_id')
                    ->label('Rental')
                    ->options(function () {
                        return \App\Models\Rental::with('user')->get()->mapWithKeys(function ($rental) {
                            return [$rental->id => $rental->user->name];
                        });
                    })
                    ->required(),
                Forms\Components\Select::make('produk_id')
                    ->label('Produk')
                    ->relationship('produk', 'nama_produk')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('harga_satuan')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('subtotal')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rental.id')
                    ->label('Rental ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('produk.nama_produk')
                    ->label('Produk')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah'),
                Tables\Columns\TextColumn::make('harga_satuan')
                    ->money('idr', true),
                Tables\Columns\TextColumn::make('subtotal')
                    ->money('idr', true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDetailRentals::route('/'),
            'create' => Pages\CreateDetailRental::route('/create'),
            'edit' => Pages\EditDetailRental::route('/{record}/edit'),
        ];
    }
}
