<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipper extends Model
{
    use HasFactory;
    protected $table = 'shippers';
    protected $guarded = [''];

    public function shipment(){
        return $this->hasMany(shipment::class);
    }

    public function job(){
        return $this->hasMany(job::class);
    }
}
