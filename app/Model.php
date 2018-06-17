<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
use App\Traits\ResponsableTrait;
use App\Traits\HasUUID;
use App\Traits\RecordsActivityTrait;
use App\Traits\RelatableTrait;

class Model extends BaseModel
{
    use ResponsableTrait, HasUUID, RecordsActivityTrait, RelatableTrait;
     
    public $incrementing = false;
}
