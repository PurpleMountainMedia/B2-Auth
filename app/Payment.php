<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedByTrait;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'method', 'amount', 'ref', 'meta'
    ];
}
