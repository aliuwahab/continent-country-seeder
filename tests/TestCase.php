<?php

namespace Aliuwahab\ContinentCountrySeeder\Tests;

use Aliuwahab\ContinentCountrySeeder\ContinentCountrySeederServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Aliuwahab\\ContinentCountrySeeder\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ContinentCountrySeederServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_continent-country-seeder_table.php.stub';
        $migration->up();
        */
    }
}
