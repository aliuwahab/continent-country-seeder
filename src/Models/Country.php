<?php

namespace Aliuwahab\ContinentCountrySeeder\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    protected $guarded = ['id'];

    public function continent(): BelongsTo
    {
        return $this->belongsTo(Continent::class);
    }

    public function scopeContinent($query, int $continentId): Builder
    {
        return $query->where('continent_id', $continentId);
    }
}
