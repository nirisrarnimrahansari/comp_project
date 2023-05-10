<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_id',
        'price',
        'value',
        'measurement_id' ,        
        'condition',
        'deleted_date',
    ];
    public function work_name_info(){  
        return $this->hasOne('App\Models\WorkName', 'id', 'name_id');
     }
     public function measurement_name_info(){  
        return $this->hasOne('App\Models\Measurement', 'id', 'measurement_id');
     }
}
