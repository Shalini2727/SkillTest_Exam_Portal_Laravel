<?php

namespace App\Http\Controllers;

use App\Models\ExamPaper;
use Illuminate\Http\Request;

class AdminExamPaperController extends Controller
{
    /*Exam Paper List*/
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $examPapers = ExamPaper::latest()->get();

        return view(
            'admin.exam-papers.index',
            compact('examPapers')
        );
    }


    /*Add Exam Paper Form*/
    public function create()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        return view('admin.exam-papers.create');
    }

    /*Store Exam Paper*/
    public function store(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $validated = $request->validate([
            'subject'     => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration'    => 'required|integer|min:1',
            'total_marks' => 'required|integer|min:1',
        ]);

        ExamPaper::create([
            'subject'     => $validated['subject'],
            'description' => $validated['description'] ?? null,
            'duration'    => $validated['duration'],
            'total_marks' => $validated['total_marks'],
            'status'      => 1,
        ]);

        return redirect()
            ->route('admin.exam-papers')
            ->with(
                'success',
                'Exam paper added successfully.'
            );
    }
}
