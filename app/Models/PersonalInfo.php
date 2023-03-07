<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'address',
        'profile_img_1',
        'profile_img_2',
    ];
}
