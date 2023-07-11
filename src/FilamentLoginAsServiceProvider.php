<?php

namespace IbrahimBougaoua\FilamentLoginAs;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use IbrahimBougaoua\FilamentLoginAs\Commands\FilamentLoginAsCommand;
use Spatie\LaravelPackageTools\Package;

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
