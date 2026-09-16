<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\ExamPaper;
use App\Models\Result;

class ExamAssignment extends Model
{
    protected $table = 'exam_assignments';

    protected $fillable = [
        'student_id',
        'exam_paper_id',
        'attempted',
        'started_at',
        'submitted_at',
        'score',
    ];

    protected $casts = [
        'attempted' => 'boolean',
        'started_at' => 'datetime',
        'submitted_at' => 'datetime',
        'score' => 'integer',
    ];

    /*Student Relationship*/
    public function student()
    {
        return $this->belongsTo(
            Student::class,
            'student_id'
        );
    }

    /*Exam Paper Relationship*/
    public function examPaper()
    {
        return $this->belongsTo(
            ExamPaper::class,
            'exam_paper_id'
        );
    }

    /*Result Relationship*/
    public function result()
    {
        return $this->hasOne(
            Result::class,
            'exam_assignment_id'
        );
    }
}

