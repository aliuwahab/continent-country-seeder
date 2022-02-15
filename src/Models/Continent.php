<?php

namespace Aliuwahab\ContinentCountrySeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Continent extends Model
{
    public $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('continent-country-seeder.continents_table_name'));
    }

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
