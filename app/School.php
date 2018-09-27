<?php

namespace App;

use App\Traits\LinkableTrait;
use Auth;

class School extends Model
{
    use LinkableTrait;

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (!$model->created_by) {
                $model->created_by = optional(Auth::User())->id;
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'created_by', 'organisation_id', 'address_line1', 'address_line2', 'address_town', 'address_county',
        'address_postcode', 'address_country', 'phone', 'website', 'meta'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta' => 'array',
    ];

    /**
     * The organisation that this school belongs to.
     *
     * @return belongsTo
     */
    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    /**
     * Get the validation rules
     *
     * @return array
     */
    public function getValidationRules($extra = [])
    {
        $rules = [
            'name' => 'required',
            'address_line1' => 'required',
            'address_town' => 'required',
            'address_postcode' => 'required',
            'address_country' => 'required',
            'phone' => 'required',
        ];
        return array_merge($rules, $extra);
    }

    /**
     * Get the validation messages
     *
     * @return array
     */
    public function getValidationMessages()
    {
        return [];
    }
}
