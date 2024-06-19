<?php

namespace App\Models;

use App\Traits\Uuid;
use Spatie\Permission\Models\Permission as Model;

class Permission extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $guarded = [];

    protected $keyType = 'string';
}
