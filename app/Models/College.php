<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    protected $fillable = [
        'name',
        'code',
        'status',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}