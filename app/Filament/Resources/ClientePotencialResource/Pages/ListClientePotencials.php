<?php

namespace App\Filament\Resources\ClientePotencialResource\Pages;

use App\Filament\Resources\ClientePotencialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientePotencials extends ListRecords
{
    protected static string $resource = ClientePotencialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
