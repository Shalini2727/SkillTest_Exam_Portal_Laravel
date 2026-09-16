<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Show Admin Login Page
    public function showLogin()
    {
        return view('admin.login');
    }


    // Admin Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            session([
                'admin_id' => $admin->id,
                'admin_name' => $admin->name,
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid email or password.');
    }


    // Admin Dashboard
    public function dashboard()
    {
        // Check Admin Login
        if (!session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        // Dashboard statistics
        $totalStudents = DB::table('students')->count();
        $totalColleges = DB::table('colleges')
            ->where('status', 1)
            ->count();

        $totalExamPapers = DB::table('exam_papers')->count();
        $totalQuestions = DB::table('questions')->count();

        return view('admin.dashboard', compact(
            'totalStudents',
            'totalColleges',
            'totalExamPapers',
            'totalQuestions'
        ));
    }

    // Admin Logout
    public function logout()
    {
        session()->forget([
            'admin_id',
            'admin_name'
        ]);
        return redirect('/admin/login');
    }
}