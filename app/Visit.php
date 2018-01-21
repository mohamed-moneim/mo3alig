<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //

    public $table = 'visits';
    public $fillable = [
        'name',
    ];

    public function patient(){

        return $this->belongsTo(Patient::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);

    }

}
