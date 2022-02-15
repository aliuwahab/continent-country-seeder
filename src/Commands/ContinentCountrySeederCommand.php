<?php

namespace Aliuwahab\ContinentCountrySeeder\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ContinentCountrySeederCommand extends Command
{
    public $signature = 'continent-country-seeder';

    public $description = 'Populates the tables with the continents and countries data.';

    public function handle(): int
    {
        $continents = $this->fetchContinents();

        $continents->each(function ($continent) {
            DB::table(config('continent-country-seeder.continents_table_name'))->updateOrInsert([
                'id' => $continent['id'],
            ], [
                'code' => $continent['code'],
                'name' => $continent['name'],
            ]);
        });

        $countries = $this->fetchCountries();

        $countries->each(function ($country) use ($continents) {
            DB::table(config('continent-country-seeder.countries_table_name'))->updateOrInsert([
                'code' => $country['code'],
            ], [
                'name' => $country['name'],
                'continent_id' => $continents->filter(fn ($item, $key) => $item['code'] == $country['continent'])->first()['id'],
                'currency' => $country['currency'],
            ]);
        });

        $this->info('Continents and countries seeding completed.');

        return Command::SUCCESS;
    }

    private function fetchContinents(): Collection
    {
        return include(__DIR__ . ' . /../../data/continents.php');
    }

    private function fetchCountries(): Collection
    {
        $data = include(__DIR__ . ' . /../../data/countries.php');

        return new Collection($data);
    }
}
