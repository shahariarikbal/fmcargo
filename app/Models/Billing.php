<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    //********* Relationship ***********//

    public function order()
    {
        return $this->belongsTo(Order::class, 'billing_id', 'id');
    }
}
