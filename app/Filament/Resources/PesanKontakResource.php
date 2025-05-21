<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesanKontakResource\Pages;
use App\Filament\Resources\PesanKontakResource\RelationManagers;
use App\Models\pesan_kontak;
use App\Models\PesanKontak;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesanKontakResource extends Resource
{
    protected static ?string $model = pesan_kontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pengirim')
                ->required(),
                TextInput::make('email_pengirim')
                ->email()
                ->required(),
                TextInput::make('subjek')
                ->required(),
                Textarea::make('isi_pesan')
                ->required(),
                Select::make('status')
                    ->options([
                        'BARU' => 'Baru',
                        'DIBACA' => 'Dibaca',
                        'DITANGGAPI' => 'Ditanggapi',
                    ])
                    ->default('BARU')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pengirim')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_pengirim')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('subjek')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kirim')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListPesanKontaks::route('/'),
            'create' => Pages\CreatePesanKontak::route('/create'),
            'edit' => Pages\EditPesanKontak::route('/{record}/edit'),
        ];
    }
}
