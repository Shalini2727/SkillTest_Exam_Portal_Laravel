<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminQuestionController;
use App\Http\Controllers\AdminExamPaperController;
use App\Http\Controllers\AdminExamAssignmentController;
use App\Http\Controllers\AdminCollegeController;
use App\Http\Controllers\ResultController;


/*SkillTest Landing Page*/
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome');
});


/* Student Routes */
Route::get('/student/register',[StudentController::class, 'register'])->name('student.register');

Route::post('/student/register',[StudentController::class, 'registerStore'])->name('student.register.store');

Route::get('/student/login',[StudentController::class, 'login'])->name('student.login');

Route::post('/student/login',[StudentController::class, 'loginStore'])->name('student.login.store');


Route::post('/student/logout',[StudentController::class, 'logout'])->name('student.logout');


/*Logged-in Student Routes*/
Route::middleware('student')
    ->prefix('student')
    ->name('student.')
    ->group(function () {

        // Student Dashboard
        Route::get('/dashboard',[StudentController::class, 'dashboard'])->name('dashboard');


        // My Exams - dedicated page
        Route::get('/exams',[StudentController::class, 'exams'])->name('exams');


        // My Results - dedicated page
        Route::get('/results',[StudentController::class, 'results'])->name('results');


        // Start Exam
        Route::get('/exam/{id}',[StudentController::class, 'startExam'])->name('exam');


        // Submit Exam
        Route::post('/exam/{id}/submit',[StudentController::class, 'submitExam'])->name('exam.submit');


        // View Result
        Route::get('/result/{id}',[StudentController::class, 'result'])->name('result');

    });


/* Admin Routes */
Route::get('/admin/login',[AdminController::class, 'showLogin'])->name('admin.login');

Route::post('/admin/login',[AdminController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');


/* Admin Students */
Route::get('/admin/students',[AdminStudentController::class, 'index'])->name('admin.students');

Route::get('/admin/students/create',[AdminStudentController::class, 'create'])->name('admin.students.create');

Route::post('/admin/students',[AdminStudentController::class, 'store'])->name('admin.students.store');


/* Admin Colleges */
Route::get('/admin/colleges',[AdminCollegeController::class, 'index'])->name('admin.colleges');

Route::get('/admin/colleges/create',[AdminCollegeController::class, 'create'])->name('admin.colleges.create');

Route::post('/admin/colleges',[AdminCollegeController::class, 'store'])->name('admin.colleges.store');


/* Admin Exam Papers */
Route::get('/admin/exam-papers',[AdminExamPaperController::class, 'index'])->name('admin.exam-papers');

Route::get('/admin/exam-papers/create',[AdminExamPaperController::class, 'create'])->name('admin.exam-papers.create');

Route::post('/admin/exam-papers',[AdminExamPaperController::class, 'store'])->name('admin.exam-papers.store');


/* Admin Questions */
Route::get('/admin/questions',[AdminQuestionController::class, 'index'])->name('admin.questions');

Route::get('/admin/questions/create',[AdminQuestionController::class, 'create'])->name('admin.questions.create');

Route::post('/admin/questions',[AdminQuestionController::class, 'store'])->name('admin.questions.store');


/* Admin - Assign Exams */
Route::get('/admin/assign-exams',[AdminExamAssignmentController::class, 'index'])->name('admin.assign-exams');

Route::get('/admin/assign-exams/create',[AdminExamAssignmentController::class, 'create'])->name('admin.assign-exams.create');

Route::post('/admin/assign-exams',[AdminExamAssignmentController::class, 'store'])->name('admin.assign-exams.store');


/*Admin - Results*/
Route::get('/admin/results',[ResultController::class, 'index'])->name('admin.results');

Route::get('/admin/results/{id}',[ResultController::class, 'show'])->name('admin.result.show');

