<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedByTrait;

class Licence extends Model
{
    use CreatedByTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'key', 'created_by', 'school_id', 'licence_plan_id', 'payment_id'
    ];


    /**
     * The school that the licence has been allocated to.
     *
     * @return App\School
     */
    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    /**
     * The plan the the licence is for.
     *
     * @return App\LicencePlan
     */
    public function plan()
    {
        return $this->belongsTo('App\LicencePlan', 'licence_plan_id');
    }
}
