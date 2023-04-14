<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class City extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function state()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }
    public function addresses()
    {
        return $this->hasMany(UserAddress::class,'city_id','id');
    }

}
