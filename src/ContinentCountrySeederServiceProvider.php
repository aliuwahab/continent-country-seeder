<?php

namespace Aliuwahab\ContinentCountrySeeder;

use Aliuwahab\ContinentCountrySeeder\Commands\ContinentCountrySeederCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ContinentCountrySeederServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('continent-country-seeder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_continent-country-seeder_table')
            ->hasCommand(ContinentCountrySeederCommand::class);
    }
}
