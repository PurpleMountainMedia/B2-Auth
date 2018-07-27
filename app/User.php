<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Validation\Rule;
use App\Traits\HasUUID;
use App\Traits\ResponsableTrait;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasUUID, ResponsableTrait, HasRoles;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'phone', 'product_updates_marketing', 'product_notifications_marketing'
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
     * @return BelongsToMany
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
     * @return array
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
     * @return array
     */
    public function getValidationMessages()
    {
        return [];
    }

    /**
     * Get First Name Attribute
     *
     * @param $value
     * @return string
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

    /**
     * Check if the specific resource is the users organisation.
     *
     * @param string $model_name The name of the resource type.
     * @param Model $model The model the user is trying to access.
     * @return boolean
     */
    public function hasAccessTo($model = '')
    {
        if (!empty($model) && !empty(get_class($model))) {
            $model_name = get_class($model);

            if ($model_name === 'App\School' ||
                $model_name === 'App\Report' ||
                $model_name === 'App\User'
            ) {
                $model_org_id = $model->organisation->id;
            } elseif ($model_name === 'App\Organisation') {
                $model_org_id = $model->id;
            }
            return in_array($model_org_id, $this->organisationIds());
        }
        return false;
    }

    /**
     * Get the ids of all the organisations this user is apart of.
     *
     * @return array
     */
    public function organisationIds()
    {
        $organisations = $this->organisations()->select('id')->get()->toArray();
        $organisation_ids = [];
        foreach ($organisations as $key => $organisation) {
            $organisation_ids[] = $organisation['id'];
        }
        return $organisation_ids;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
