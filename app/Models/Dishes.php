<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dishes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'dishes_orders', 'dishes_id', 'order_id');
    }

}
