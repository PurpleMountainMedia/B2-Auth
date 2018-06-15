<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * @return BelongsToMany
     */
     public function users()
     {
        return $this->belongsToMany('App\User')
                    ->as('user')
                    ->withPivot('default')
                    ->withTimestamps();
     }
}
