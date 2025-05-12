<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;

class FilamentPageSectionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            // Optional: Add a navigation group for page sections
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Content Management')
                    ->icon('heroicon-o-document-text')
            ]);
        });
    }
}