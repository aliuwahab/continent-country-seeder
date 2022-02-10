<?php

namespace Aliuwahab\ContinentCountrySeeder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aliuwahab\ContinentCountrySeeder\ContinentCountrySeeder
 */
class ContinentCountrySeeder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'continent-country-seeder';
    }
}
