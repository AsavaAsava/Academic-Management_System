<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentItem extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'course',
        'group'
    ];
}
