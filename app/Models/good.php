<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class good extends Model
{
    use HasFactory;
    protected $table = 'goods';
    protected $guarded = [''];

    protected function shipment(){
        return $this->hasMany(shipment::class);
    }

    // public function consignee(){
    //     return $this->belongsTo(consignee::class);
    // }
}
