<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()  {
        return $this->belongsTo(User::class,'user_id');

    }

    public function fuel(){
        return $this->belongsTo(Fuel::class,'fuel_id');
    }
    public function branch(){
        return $this->belongsTo(Branch::class,'branch_id');
    }
}
