<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'question',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
        'marks',
        'exam_paper_id',
    ];


    /*Exam Paper*/
    public function examPaper()
    {
        return $this->belongsTo(
            ExamPaper::class,
            'exam_paper_id'
        );
    }

    /*Exam Questions*/
    public function examQuestions()
    {
        return $this->hasMany(
            ExamQuestion::class,
            'question_id'
        );
    }
}