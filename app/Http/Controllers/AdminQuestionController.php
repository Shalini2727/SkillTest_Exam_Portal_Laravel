<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\ExamPaper;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    /*Question Bank*/
    public function index(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        /*Get all active exam papers / subjects*/
        $examPapers = ExamPaper::where('status', 1)
            ->orderBy('subject')
            ->get();

        /* Selected Exam Paper / Subject*/
        $selectedExamPaper = null;
        $questions = collect();
        if ($request->filled('exam_paper_id')) {

            $selectedExamPaper = ExamPaper::where('id', $request->exam_paper_id)
                ->where('status', 1)
                ->first();

            /*Get questions belonging ONLY to selected subject*/
            if ($selectedExamPaper) {

                $questions = Question::where(
                    'exam_paper_id',
                    $selectedExamPaper->id
                )
                ->latest()
                ->get();
            }
        }

        return view(
            'admin.questions.index',
            compact(
                'examPapers',
                'selectedExamPaper',
                'questions'
            )
        );
    }


    /*Add Question Form*/
    public function create(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        /*Get active exam papers / subjects*/
        $examPapers = ExamPaper::where('status', 1)
            ->orderBy('subject')
            ->get();

        /*Selected Exam Paper / Subject*/
        $selectedExamPaper = null;

        if ($request->filled('exam_paper_id')) {

            $selectedExamPaper = ExamPaper::where(
                'id',
                $request->exam_paper_id
            )
            ->where('status', 1)
            ->first();
        }

        return view(
            'admin.questions.create',
            compact(
                'examPapers',
                'selectedExamPaper'
            )
        );
    }

    /*Store Question*/
    public function store(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        /*Validate Question*/
        $validated = $request->validate([
            'exam_paper_id' => 'required|exists:exam_papers,id',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'marks' => 'required|numeric|min:1',
            'status' => 'required|boolean',

        ]);


        /*Check Selected Exam Paper*/
        $examPaper = ExamPaper::where(
            'id',
            $validated['exam_paper_id']
        )
        ->where('status', 1)
        ->first();


        if (!$examPaper) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Selected subject is not available.'
                );
        }

        /*Create Question*/
        Question::create([

            'exam_paper_id' => $examPaper->id,
            'question' => $validated['question'],
            'option_a' => $validated['option_a'],
            'option_b' => $validated['option_b'],
            'option_c' => $validated['option_c'],
            'option_d' => $validated['option_d'],
            'correct_answer' => $validated['correct_answer'],
            'marks' => $validated['marks'],
            'status' => $validated['status'],
        ]);


        /*Return to Selected Subject*/

        return redirect()
            ->route(
                'admin.questions',
                [
                    'exam_paper_id' => $examPaper->id
                ]
            )
            ->with(
                'success',
                'Question added successfully.'
            );
    }
}

