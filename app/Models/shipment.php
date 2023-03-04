<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
    protected $table = 'shipments';
    protected $guarded = [''];

    public function transport(){
    return $this->belongsTo(transport::class);
    }
    public function good(){
    return $this->belongsTo(good::class);
    }
}
