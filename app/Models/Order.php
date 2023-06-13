<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    //********* Relationship ***********//

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class)->with('product');
    }

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }


}
