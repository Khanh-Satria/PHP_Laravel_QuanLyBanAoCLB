<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table ="users";

    public function order_linked()
    {
       return $this->hasMany(Order::class, 'IDuser','id');
    }
}