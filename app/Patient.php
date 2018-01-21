<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public $table = 'patients';

    public $fillable = [
        'name',
        ];

    function visitOrder(){
        return $this->hasMany(VisitOrder::class);
    }

    function visitReport(){
        return $this->hasMany(VisitReport::class);
    }

    function visit(){
        return $this->hasMany(Visit::class);
    }

}
