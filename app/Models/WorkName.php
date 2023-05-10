<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkName extends Model
{
    use HasFactory;
    protected $fillable = [
        'work_name',
        'deleted_date',
    ];
}
