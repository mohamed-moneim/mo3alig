<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitOrder extends Model
{
    //

    public $table = 'order_visi';
    public $fillable = [
        'name',
    ];

    public function patient(){

        return $this->belongsTo(Patient::class);
    }
}
