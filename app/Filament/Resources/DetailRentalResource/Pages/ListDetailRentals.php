<?php

namespace App\Filament\Resources\DetailRentalResource\Pages;

use App\Filament\Resources\DetailRentalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailRentals extends ListRecords
{
    protected static string $resource = DetailRentalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
