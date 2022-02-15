<?php

namespace Aliuwahab\ContinentCountrySeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Continent extends Model
{
    public $guarded = ['id'];

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
