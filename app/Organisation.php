<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Auth;
use App\Traits\HasUUID;
use App\Traits\CreatedByTrait;
use App\Traits\LinkableTrait;

class Organisation extends Model
{
    // use CreatedByTrait, LinkableTrait;

    public static $types = [
        'School', 'Multi Academy Trust', 'Council', 'Other'
    ];

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
        'name', 'type', 'created_by'
    ];

    /**
     * The users within the organisation
     *
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('default')
                    ->withTimestamps();
    }

    /**
     * The schools within this organisation
     *
     * @return HasMany
     */
    public function schools()
    {
        return $this->hasMany('App\School');
    }

    /**
     * Get the validation rules
     *
     * @return array
     */
    public function getValidationRules()
    {
        return [
            'name' => 'required',
            'type' => 'required',
        ];
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
