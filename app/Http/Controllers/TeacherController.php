<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Attendance;
use App\Models\Assignments;




class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display data of the logged in user

        $totalClasses = Auth::user()->classes()->count();

        $totalStudents = Students::whereHas('studentclass', function ($query) {
            $query->where('teacher_id', Auth::id());
        })->count();

        return view('teacher.dashboard', compact('totalClasses','totalStudents'));
    }

    public function classes()
    {
        $classes = Auth::user()
        ->classes()
        ->withCount('students')
        ->get();

        return view('teacher.classes', compact('classes'));
    }

    public function students()
    {
       $students = Students::whereHas('studentclass', function ($query) {
            $query->where('teacher_id', Auth::id());
        })
        ->with('studentclass')
        ->get();

        return view('teacher.students', compact('students'));
    }

  public function attendance()
    {
        $students = Students::whereHas('studentclass', function ($query) {
            $query->where('teacher_id', Auth::id());
        })
        ->with('studentclass')
        ->get();

        return view('teacher.attendance', compact('students'));
    }

    public function storeattendance(Request $request)
    {
        $request->validate([
            'attendance' => 'required|array'
        ]);

        foreach ($request->attendance as $studentId => $status) {

            Attendance::updateOrCreate(
                [
                    'student_id' => $studentId,
                    'date' => now()->toDateString(),
                ],
                [
                    'status' => $status
                ]
            );

        }

        return redirect()->back()->with('success', 'Attendance saved successfully');
    }

    public function assignments()
    {
        $classes = Auth::user()->classes;
        return view('teacher.assignments', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
