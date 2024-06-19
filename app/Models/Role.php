<?php

namespace App\Models;

use App\Traits\Uuid;
use Spatie\Permission\Models\Role as Model;

class Role extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $guarded = [];

    protected $keyType = 'string';
}

