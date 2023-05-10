<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'package_id',
    ];
    public function package_info(){
        return $this->hasOne('App\Models\Package', 'id', 'package_id');
       }
}
