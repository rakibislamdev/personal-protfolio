<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'institute_name',
        'start_date',
        'end_date',
        'course_details',
    ];
}
