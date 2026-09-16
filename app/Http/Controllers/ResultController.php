<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /*Display all examination results.*/
    public function index()
    {
        $results = Result::with([
            'student',
            'examAssignment.examPaper'
        ])
        ->latest()
        ->get();

        $totalResults = $results->count();
        $completedResults = $results
            ->where('status', 'completed')
            ->count();

        $averagePercentage = $results->count() > 0
            ? round($results->avg('percentage'), 2)
            : 0;

        $passedResults = $results
            ->where('percentage', '>=', 40)
            ->count();

        return view('admin.results.index', compact(
            'results',
            'totalResults',
            'completedResults',
            'averagePercentage',
            'passedResults'
        ));
    }

    /*Display a single examination result.*/
    public function show($id)
    {
        $result = Result::with([
            'student',
            'examAssignment.examPaper'
        ])->findOrFail($id);

        return view('admin.results.show', compact('result'));
    }
}