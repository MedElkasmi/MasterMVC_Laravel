<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_id',
        'employe_name',
        'employe_skills',
        'employe_entity',
        'salary_upgrade',
        'salary_brut',
        'salary_net',
        'token',
    ];

    public function employe(){

        return $this->belongsTo(Employe::class);
    }
}
