<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class AdminCollegeController extends Controller
{
    /*College List*/
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $colleges = College::latest()->get();
        return view('admin.colleges.index',compact('colleges')
        );
    }


    /*Add College Form*/
    public function create()
    {
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }
        return view('admin.colleges.create');
    }


    /*Store College*/
    public function store(Request $request)
{
    if (!session()->has('admin_id')) {
        return redirect('/admin/login');
    }

    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    College::create([
        'name' => $validated['name'],
        'status' => 1,
    ]);

    return redirect()
        ->route('admin.colleges')
        ->with('success', 'College added successfully.');
}
}