<?php

namespace Aliuwahab\ContinentCountrySeeder\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('continent-country-seeder.countries_table_name'));
    }

    public function continent(): BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }

    public function scopeContinent($query, int $continentId): Builder
    {
        return $query->where('continent_id', $continentId);
    }
}
