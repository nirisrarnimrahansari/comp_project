<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'organization',
        'address' ,        
        'city',
        'state_id',
        'country_id',
        'cell',
        'phone',
        'whatsapp_no',
        'email_id',
        'deleted_date',
    ];
    public function state_info(){
    return $this->hasOne('App\Models\State', 'id', 'state_id');
   }
   public function country_info(){
    return $this->hasOne('App\Models\Country', 'id', 'country_id');
   }
}
