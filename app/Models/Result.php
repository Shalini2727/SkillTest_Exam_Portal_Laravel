<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';
    protected $fillable = [
        'student_id',
        'exam_assignment_id',
        'score',
        'total_marks',
        'percentage',
        'status',
    ];

    protected $casts = [
        'score' => 'integer',
        'total_marks' => 'integer',
        'percentage' => 'float',
    ];

    /*Student Relationship*/
    public function student()
    {
        return $this->belongsTo(
            Student::class,
            'student_id'
        );
    }

    /*Exam Assignment Relationship*/
    public function examAssignment()
    {
        return $this->belongsTo(
            ExamAssignment::class,
            'exam_assignment_id'
        );
    }
}
