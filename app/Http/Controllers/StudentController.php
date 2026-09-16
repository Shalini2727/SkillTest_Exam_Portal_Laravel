<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\College;
use App\Models\ExamAssignment;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentController extends Controller
{
    /*Student Registration Page*/
    public function register()
    {
        $colleges = College::where('status', 1)
            ->orderBy('name', 'asc')
            ->get();

        return view(
            'student.register',
            compact('colleges')
        );
    }


    /*Store Student Registration*/
    public function registerStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'dob' => 'required|date',
            'email' => 'required|email|unique:students,email',
            'mobile' => 'required|string|max:20',
            'qualification' => 'required|string|max:150',
            'passing_year' => 'required|integer',
            'percentile' => 'nullable|numeric',
            'college_id' => 'required|exists:colleges,id',
            'tenth_percentage' => 'nullable|numeric',
            'twelfth_percentage' => 'nullable|numeric',
            'graduation_percentage' => 'nullable|numeric',
            'password' => 'required|min:3|confirmed',
        ]);


        Student::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'qualification' => $request->qualification,
            'passing_year' => $request->passing_year,
            'percentile' => $request->percentile,
            'college_id' => $request->college_id,
            'tenth_percentage' => $request->tenth_percentage,
            'twelfth_percentage' => $request->twelfth_percentage,
            'graduation_percentage' => $request->graduation_percentage,
            'password' => Hash::make(
                $request->password
            ),

            'status' => 1,
        ]);


        return redirect()
            ->route('student.login')
            ->with(
                'success',
                'Registration successful. Please login.'
            );
    }


    /*Student Login Page*/
    public function login()
    {
        return view('student.login');
    }


    /*Student Login*/
    public function loginStore(Request $request)
    {
        $request->validate([

            'email' => 'required|email',

            'password' => 'required',
        ]);


        $student = Student::where(
            'email',
            $request->email
        )
            ->where('status', 1)
            ->first();


        if (
            !$student ||
            !Hash::check(
                $request->password,
                $student->password
            )
        ) {
            return back()
                ->withErrors([
                    'email' => 'Invalid email or password.'
                ])
                ->withInput();
        }


        /*Regenerate Session*/
        $request->session()->regenerate();


        session([
            'student_id' => $student->id,

            'student_name' => trim(
                $student->first_name .
                ' ' .
                ($student->last_name ?? '')
            ),

            'student_email' => $student->email,
        ]);


        return redirect()
            ->route('student.dashboard');
    }


    /*Student Logout*/
    public function logout(Request $request)
    {
        $request->session()->forget([
            'student_id',
            'student_name',
            'student_email',
        ]);

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('student.login')
            ->with(
                'success',
                'You have been logged out successfully.'
            );
    }


    /*Get Logged-in Student*/
    private function getLoggedInStudent()
    {
        $studentId = session('student_id');

        if (!$studentId) {
            return null;
        }

        return Student::find($studentId);
    }


    /*Student Dashboard*/
    public function dashboard()
    {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login')
                ->withErrors([
                    'email' => 'Please login first.'
                ]);
        }


        /*Student Assignments*/
        $assignments = ExamAssignment::with('examPaper')
            ->where(
                'student_id',
                $student->id
            )
            ->latest()
            ->get();


        /*Student Results */
        $results = Result::with([
            'examAssignment.examPaper'
        ])
            ->whereHas(
                'examAssignment',
                function ($query) use ($student) {

                    $query->where(
                        'student_id',
                        $student->id
                    );
                }
            )
            ->latest()
            ->get();


        return view(
            'student.dashboard',
            compact(
                'student',
                'assignments',
                'results'
            )
        );
    }


    /*Student Exams*/
    public function exams()
    {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login');
        }


        $assignments = ExamAssignment::with('examPaper')
            ->where(
                'student_id',
                $student->id
            )
            ->latest()
            ->get();


        return view(
            'student.exams',
            compact(
                'student',
                'assignments'
            )
        );
    }


    /*Student Results*/
    public function results()
    {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login')
                ->withErrors([
                    'email' => 'Please login first.'
                ]);
        }


        $results = Result::with([
            'student',
            'examAssignment.examPaper'
        ])
            ->whereHas(
                'examAssignment',
                function ($query) use ($student) {

                    $query->where(
                        'student_id',
                        $student->id
                    );
                }
            )
            ->latest('id')
            ->get();


        return view(
            'student.results',
            compact(
                'student',
                'results'
            )
        );
    }


    /*Start Exam*/
    public function startExam($id)
    {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login');
        }


        /*Find Assignment*/
        $assignment = ExamAssignment::with('examPaper')
            ->where('id', $id)
            ->where(
                'student_id',
                $student->id
            )
            ->firstOrFail();


        /*Prevent Starting Completed Exam Again*/
        if ($assignment->submitted_at) {

            return redirect()
                ->route(
                    'student.result',
                    $assignment->id
                )
                ->with(
                    'error',
                    'This examination has already been submitted.'
                );
        }


        /*Exam Paper*/
        $examPaper = $assignment->examPaper;


        if (!$examPaper) {
            abort(
                404,
                'Exam paper not found.'
            );
        }


        /*Get Questions*/
        $examQuestions = Question::where(
            'exam_paper_id',
            $examPaper->id
        )
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();


        /*Check Questions*/
        if ($examQuestions->count() === 0) {

            return redirect()
                ->route('student.exams')
                ->with(
                    'error',
                    'No questions are available for this examination.'
                );
        }


        /*Start Exam Timer*/
        if (!$assignment->started_at) {

            $assignment->started_at = Carbon::now();

            $assignment->attempted = true;

            $assignment->save();
        }


        /*Calculate Remaining Time*/
        $durationSeconds =
            ((int) $examPaper->duration) * 60;


        $elapsedSeconds = 0;


        if ($assignment->started_at) {

            $elapsedSeconds =
                Carbon::now()->diffInSeconds(
                    $assignment->started_at
                );
        }


        $remainingSeconds = max(
            0,
            $durationSeconds - $elapsedSeconds
        );


        /*Send Data To Exam View*/
        return view(
            'student.exam',
            compact(
                'assignment',
                'examPaper',
                'examQuestions',
                'remainingSeconds'
            )
        );
    }


    /* Submit Exam*/
    public function submitExam(
        Request $request,
        $id
    ) {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login');
        }


        /*Find Assignment*/
        $assignment = ExamAssignment::with('examPaper')
            ->where('id', $id)
            ->where(
                'student_id',
                $student->id
            )
            ->firstOrFail();


        /*Prevent Duplicate Submission */
        if ($assignment->submitted_at) {

            return redirect()
                ->route(
                    'student.result',
                    $assignment->id
                )
                ->with(
                    'error',
                    'This examination has already been submitted.'
                );
        }


        /*Get Submitted Answers*/
        $answers = $request->input(
            'answers',
            []
        );


        /*Get Questions*/
        $questions = Question::where(
            'exam_paper_id',
            $assignment->exam_paper_id
        )
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();


        /*Calculate Score*/
        $score = 0;

        $totalMarks = 0;


        foreach ($questions as $question) {

            /*Question Marks*/
            $marks = (int) (
                $question->marks ?? 1
            );


            $totalMarks += $marks;


            /*Student Answer*/
            $studentAnswer =
                $answers[$question->id] ?? null;


            /*Correct Answer*/
            $correctAnswer =
                $question->correct_answer ?? null;


            /*Compare Answers*/
            if (
                $studentAnswer !== null &&
                $correctAnswer !== null &&
                strtoupper(
                    trim((string) $studentAnswer)
                ) ===
                strtoupper(
                    trim((string) $correctAnswer)
                )
            ) {

                $score += $marks;
            }
        }


        /*Calculate Percentage*/
        $percentage = 0;


        if ($totalMarks > 0) {

            $percentage = round(
                ($score / $totalMarks) * 100,
                2
            );
        }


        /*Save Assignment + Result*/
        DB::transaction(function () use (
            $assignment,
            $student,
            $score,
            $totalMarks,
            $percentage
        ) {

            /*Update Exam Assignment*/
            $assignment->score =
                $score;

            $assignment->submitted_at =
                Carbon::now();

            $assignment->attempted =
                true;

            $assignment->save();


            /*Create / Update Result*/
            Result::updateOrCreate(

                [
                    'exam_assignment_id' =>
                        $assignment->id,
                ],

                [
                    'student_id' =>
                        $student->id,

                    'score' =>
                        $score,

                    'total_marks' =>
                        $totalMarks,

                    'percentage' =>
                        $percentage,

                    'status' =>
                        'completed',
                ]
            );
        });


        /*Redirect To Individual Result*/
        return redirect()
            ->route(
                'student.result',
                $assignment->id
            )
            ->with(
                'success',
                'Exam submitted successfully.'
            );
    }


    /*View Individual Result*/
    public function result($id)
    {
        $student = $this->getLoggedInStudent();


        if (!$student) {
            return redirect()
                ->route('student.login');
        }


        /*Find Assignment*/
        $assignment = ExamAssignment::with([
            'examPaper',
            'student'
        ])
            ->where(
                'id',
                $id
            )
            ->where(
                'student_id',
                $student->id
            )
            ->firstOrFail();


        /*Find Result*/
        $result = Result::with([
            'examAssignment.examPaper',
            'student'
        ])
            ->where(
                'exam_assignment_id',
                $assignment->id
            )
            ->where(
                'student_id',
                $student->id
            )
            ->latest('id')
            ->first();


        /* Result Doesn't Exist*/
        if (!$result && $assignment->submitted_at) {

            $questions = Question::where(
                'exam_paper_id',
                $assignment->exam_paper_id
            )
                ->where('status', 1)
                ->get();


            $totalMarks = 0;


            foreach ($questions as $question) {

                $totalMarks += (int) (
                    $question->marks ?? 1
                );
            }


            $score = (int) (
                $assignment->score ?? 0
            );


            $percentage = 0;


            if ($totalMarks > 0) {

                $percentage = round(
                    ($score / $totalMarks) * 100,
                    2
                );
            }


            /*Create Missing Result*/
            $result = Result::create([

                'student_id' =>
                    $student->id,

                'exam_assignment_id' =>
                    $assignment->id,

                'score' =>
                    $score,

                'total_marks' =>
                    $totalMarks,

                'percentage' =>
                    $percentage,

                'status' =>
                    'completed',
            ]);
        }


        /*Send Data To Blade*/
        return view(
            'student.result',
            compact(
                'assignment',
                'result'
            )
        );
    }
}