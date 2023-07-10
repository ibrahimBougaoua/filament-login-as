<?php

namespace IbrahimBougaoua\FilamentLoginAs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IbrahimBougaoua\FilamentLoginAs\Commands\FilamentLoginAsCommand;

class FilamentLoginAsServiceProvider extends PackageServiceProvider
{
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
            ->hasMigration('create_filament-login-as_table')
            ->hasCommand(FilamentLoginAsCommand::class);
    }
}
