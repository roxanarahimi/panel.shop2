<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'user_id', 'id');  //or hasMany?!
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
