<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
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

    public function vacations(){

        return $this->hasMany(Vacation::class);
    }

    public function salaries(){

        return $this->hasMany(Salary::class);
    }

}
