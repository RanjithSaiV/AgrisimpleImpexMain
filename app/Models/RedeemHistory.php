<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemHistory extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
    // public function fuel(){
    //     return $this->belongsTo(Fuel::class,'fuel_id');
    // }
}
