<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['Description','Initial_date','End_date','Price','Service_id','Quantity_people','State'];


    public function service(): HasOne
    {
        return $this->hasOne(Service::class, 'Service_id', 'id');
    }
}
