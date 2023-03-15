<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $guarded = [''];

    public function shipper(){
        return $this->belongsTo(shipper::class);
        }
}
