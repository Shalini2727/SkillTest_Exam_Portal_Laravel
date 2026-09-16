<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminStudentController extends Controller
{
    /*Display all students*/
    public function index()
    {
        $students = DB::table('students')
            ->leftJoin('colleges', 'students.college_id', '=', 'colleges.id')
            ->select(
                'students.*',
                'colleges.name as college_name'
            )
            ->orderBy('students.id', 'desc')
            ->get();

        return view('admin.students.index', compact('students'));
    }

    /*Show Add Student Form*/
    public function create()
    {
        $colleges = DB::table('colleges')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->get();

        return view('admin.students.create', compact('colleges'));
    }


    /*Store Student*/
    public function store(Request $request)
    {
        /*Validation*/
        $request->validate([
            'college_id' => 'required|exists:colleges,id',
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'dob' => 'required|date',
            'email' => 'required|email|max:150|unique:students,email',
            'mobile' => 'required|string|max:20',
            'qualification' => 'required|string|max:100',
            'passing_year' => 'required|integer|min:1900|max:2100',
            'percentile' => 'required|numeric|min:0|max:100',
            'tenth_percentage' => 'required|numeric|min:0|max:100',
            'twelfth_percentage' => 'required|numeric|min:0|max:100',
            'graduation_percentage' => 'required|numeric|min:0|max:100',
            'password' => 'required|string|min:3',
        ]);

        /*Insert Student*/
        DB::table('students')->insert([
            'college_id' => $request->college_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'qualification' => $request->qualification,
            'passing_year' => $request->passing_year,
            'percentile' => $request->percentile,
            'tenth_percentage' => $request->tenth_percentage,
            'twelfth_percentage' => $request->twelfth_percentage,
            'graduation_percentage' => $request->graduation_percentage,
            'password' => Hash::make($request->password),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        /*Redirect*/
        return redirect()
            ->route('admin.students')
            ->with('success', 'Student added successfully.');
    }
}