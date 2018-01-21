<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //


    public $table = 'doctors';

    public $fillable = [
        'name',
    ];


    function visitReport(){
        return $this->hasMany(VisitReport::class);
    }

    function visit(){
        return $this->hasMany(Visit::class);
    }



}
