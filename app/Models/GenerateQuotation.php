<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateQuotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'work_name',
        'work_type',
        'side',
        'upload_plan',
        'refrence_file',
        'discount_id',
        'comment',
        'deleted_date',
    ];
}
