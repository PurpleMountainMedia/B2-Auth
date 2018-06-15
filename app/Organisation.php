<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Traits\HasUUID;

class Organisation extends Model
{
    use HasUUID;

    public $incrementing = false;

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->created_by = optional(Auth::User())->id ?: 1;
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
     * @return Collection of users
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('default')
                    ->withTimestamps();
    }

    /**
     * Get the validation rules
     *
     * @return Array
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
     * @return Array
     */
    public function getValidationMessages()
    {
        return [];
    }
}
