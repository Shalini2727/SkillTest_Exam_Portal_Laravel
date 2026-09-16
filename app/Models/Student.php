<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\College;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'email',
        'mobile',
        'qualification',
        'passing_year',
        'percentile',
        'college_id',
        'tenth_percentage',
        'twelfth_percentage',
        'graduation_percentage',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}