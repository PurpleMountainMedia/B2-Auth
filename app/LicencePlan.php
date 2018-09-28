<?php

namespace App;

use App\Traits\CreatedByTrait;
use Carbon\Carbon;

class LicencePlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'length_days', 'payment_every_days', 'cost', 'pupils_min', 'pupils_max',
        'schools_min', 'schools_max', 'school_id', 'organisation_type'
    ];

    /**
     * Format the cost attribute.
     *
     * @var Int $value
     * @return String
     */
    public function getCostAttribute($value)
    {
        return number_format($value / 100, 2, '.', ',');
    }

    public function getPaymentEveryAttribute()
    {
        // return now()->addDays($this->payment_every_days)->shortAbsoluteDiffForHumans();
        return Carbon::now()->subDays(24)->longAbsoluteDiffForHumans();
    }

    public function scopeMinPupils($query, $val)
    {
        if ($val) {
            return $query->where('pupils_min', '<=', $val);
        }
        return $query;
    }

    public function scopeMaxPupils($query, $val)
    {
        if ($val) {
            return $query->where('pupils_max', '>=', $val);
        }
        return $query;
    }

    public function scopeMinSchools($query, $val)
    {
        if ($val) {
            return $query->where('schools_min', '<=', $val);
        }
        return $query;
    }

    public function scopeMaxSchools($query, $val)
    {
        if ($val) {
            return $query->where('schools_max', '>=', $val);
        }
        return $query;
    }
}
