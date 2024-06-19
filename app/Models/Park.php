<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\Uuid;
use App\Models\Vehycle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Park extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $guarded = [];

    protected $appends = ['date', 'name', 'week'];

    public function vehycle()
    {
        return $this->hasMany(Vehycle::class, 'id', 'vehycle_id');
    }

    protected function getDateAttribute($value)
    {
        return Carbon::parse($this->time_in)->translatedFormat('l, d F Y');
    }

    protected function getWeekAttribute($value)
    {
        return Carbon::parse($this->time_in)->weekNumberInMonth;
    }

    protected function getNameAttribute($value)
    {
        return $this->vehycle[0]->user->user_profile->name ?? '';
    }
    

}
