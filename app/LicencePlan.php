<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedByTrait;

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
}
