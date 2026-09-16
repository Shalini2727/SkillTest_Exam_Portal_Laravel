<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    protected $fillable = [
        'subject',
        'description',
        'duration',
        'total_marks',
        'status',
    ];

    /*Exam Paper has many Questions*/
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /*Exam Assignments*/
    public function assignments()
    {
        return $this->hasMany(ExamAssignment::class);
    }
}
