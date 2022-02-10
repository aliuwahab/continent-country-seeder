<?php

namespace Aliuwahab\ContinentCountrySeeder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Continent extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $guarded = ['id'];
}
