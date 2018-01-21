<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitReport extends Model
{
    //

    public $table = 'visit_reports';
    public $fillable = [
        'name',
        ];

    public function patient(){

        return $this->belongsTo(Patient::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);

    }

    public function visit(){
        return $this->belongsTo(Visit::class);

    }


}
