<?php

namespace IbrahimBougaoua\FilamentLoginAs;

use Filament\Facades\Filament;
use IbrahimBougaoua\FilamentLoginAs\Commands\FilamentLoginAsCommand;
use IbrahimBougaoua\FilamentLoginAs\FilamentLoginAs;
use Spatie\LaravelPackageTools\Package;
use Filament\PluginServiceProvider;

class FilamentLoginAsServiceProvider extends PluginServiceProvider
{
    public function packageBooted(): void
    {
        parent::packageBooted();
        
        Filament::serving(fn () => FilamentLoginAs::callLoginAsComponent());
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-login-as')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_login_as_table')
            ->hasCommand(FilamentLoginAsCommand::class);
    }
}
