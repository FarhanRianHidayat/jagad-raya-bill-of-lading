<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consignee extends Model
{
    use HasFactory;
    protected $table = 'consignees';
    protected $guarded = [''];

    // public function shipment(){
    //     return $this->hasMany(shipment::class);
    // }
    // public function good(){
    //     return $this->hasMany(good::class);
    // }
    // public function transport(){
    //     return $this->hasMany(transport::class);
    // }
}
