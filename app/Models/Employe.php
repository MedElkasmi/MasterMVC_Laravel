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

    public function vacation(){

        return $this->HasMany(Vacation::class);
    }

    public function salary(){

        return $this->HasMany(Salary::class);
    }
}
