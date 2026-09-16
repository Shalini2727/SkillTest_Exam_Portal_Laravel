<?php

namespace App\Http\Controllers;

use App\Models\ExamAssignment;
use App\Models\Student;
use App\Models\ExamPaper;
use Illuminate\Http\Request;

class AdminExamAssignmentController extends Controller
{
    /*Assign Exams Page */
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $assignments = ExamAssignment::with([
            'student',
            'examPaper'
        ])
        ->latest()
        ->get();

        return view(
            'admin.assign-exams.index',
            compact('assignments')
        );
    }


    /*Add Assignment Form*/
    public function create()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $students = Student::where('status', 1)
            ->orderBy('first_name')
            ->get();

        $examPapers = ExamPaper::where('status', 1)
            ->orderBy('subject')
            ->get();

        return view(
            'admin.assign-exams.create',
            compact(
                'students',
                'examPapers'
            )
        );
    }


    /*Store Assignment*/
    public function store(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',

            'exam_paper_id' => 'required|exists:exam_papers,id',
        ]);


        /*Prevent Duplicate Assignment */
        $alreadyAssigned = ExamAssignment::where(
            'student_id',
            $validated['student_id']
        )
        ->where(
            'exam_paper_id',
            $validated['exam_paper_id']
        )
        ->exists();


        if ($alreadyAssigned) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'This exam is already assigned to the selected student.'
                );
        }

        /*Create Assignment*/
        ExamAssignment::create([
            'student_id' => $validated['student_id'],
            'exam_paper_id' => $validated['exam_paper_id'],
            'attempted' => 0,
            'started_at' => null,
            'submitted_at' => null,
            'score' => null,
        ]);
        return redirect()
            ->route('admin.assign-exams')
            ->with(
                'success',
                'Exam assigned successfully.'
            );
    }
}
