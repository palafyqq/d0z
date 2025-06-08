<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shifts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_shifts', 'shifts_id', 'employee_id');
    }

}
