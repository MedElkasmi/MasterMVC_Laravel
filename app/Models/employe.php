<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'hire_date',
        'cnss_info',
        'birth_date',
        'email',
        'phone_number',
        'skills',
        'gender',
        'entity',
    ];
}
