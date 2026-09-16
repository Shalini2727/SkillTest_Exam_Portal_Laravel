<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    protected $table = 'exam_questions';

    protected $fillable = [
        'exam_paper_id',
        'question_id',
        'sort_order',
    ];

    /*Exam Paper*/
    public function examPaper()
    {
        return $this->belongsTo(
            ExamPaper::class,
            'exam_paper_id'
        );
    }

    /*Question*/
    public function question()
    {
        return $this->belongsTo(
            Question::class,
            'question_id'
        );
    }
}