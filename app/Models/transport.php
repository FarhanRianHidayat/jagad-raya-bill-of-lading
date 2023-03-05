<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class transport extends Model
{
    use HasFactory;
    protected $table = 'transports';
    protected $guarded = [''];
    protected $dates = ['date'];

    public function shipment(){
        return $this->hasMany(shipment::class);
    }
}
