<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'country_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false; // Assuming no timestamps

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'country_id');
    }
}