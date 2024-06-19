<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehycle extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;
        
    protected $keyType = 'string';

    protected $guarded = [];

    protected $appends = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function getNameAttribute($value)
    {
        return $this->user->name;
    }
    
}

