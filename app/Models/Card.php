<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $guarded = [];

}
