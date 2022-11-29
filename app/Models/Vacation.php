<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_id',
        'employe_name',
        'vacation_start',
        'vacation_end',
        'vacation_pointer',
        'days_available',
        'vacation_status',
    ];

    public function employe(){

        return $this->belongsTo(Employe::class);
    }
}
