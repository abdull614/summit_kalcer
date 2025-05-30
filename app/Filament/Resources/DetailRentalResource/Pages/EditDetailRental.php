<?php

namespace App\Filament\Resources\DetailRentalResource\Pages;

use App\Filament\Resources\DetailRentalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailRental extends EditRecord
{
    protected static string $resource = DetailRentalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
