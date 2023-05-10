<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'Plannig_package_name',
        'work_name_id',
        'we_provide',
        'we_deliver',
        'rate_id',
        'deleted_date',
    ];
    public function work_name_info(){
        return $this->hasOne('App\Models\WorkName', 'id', 'work_name_id');
    }
    public function rate_info(){
        return $this->hasOne('App\Models\Rate', 'id', 'rate_id');
    }
}