<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Validation\Rule;
use App\Traits\HasUUID;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasUUID;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'product_updates_marketing', 'product_notifications_marketing'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'product_updates_marketing' => 'boolean',
        'product_notifications_marketing' => 'boolean',
    ];

    /**
     * The attributes that should be added for arrays.
     *
     * @var array
     */
    protected $appends = [
        'first_name', 'last_name'
    ];

    /**
     * The organisations that the user is part of
     *
     * @return Collection of organisations
     */
    public function organisations()
    {
        return $this->belongsToMany('App\Organisation')
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)],
            'phone' => 'string',
            'password' => 'confirmed'
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

    /**
     * Get First Name Attribute
     *
     * @param $value
     * @return String
     */
    public function getFirstNameAttribute($value)
    {
         return $value ? $value : str_before($this->name, ' ');
    }

    /**
     * Get Last Name Attribute
     *
     * @param $value
     * @return String
     */
    public function getLastNameAttribute($value)
    {
        return $value ? $value : str_after($this->name, ' ');
    }
}
