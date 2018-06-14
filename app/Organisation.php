<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{

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
                    ->as('user')
                    ->withPivot('default')
                    ->withTimestamps();
     }
}
