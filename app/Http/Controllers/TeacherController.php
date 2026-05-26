<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;




class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display data of the logged in user if thier id = teacher_id in the classes table.

        $totalClasses = Auth::user()->classes()->count();

        $totalStudents = Students::whereHas('studentclass', function ($query) {
            $query->where('teacher_id', Auth::id());
        })->count();

        return view('teacher.dashboard', compact('totalClasses','totalStudents'));
    }

    public function classes()
    {
        return view('teacher.classes');
    }

    public function students()
    {
        return view('teacher.students');
    }

    public function attendance()
    {
        return view('teacher.attendance');
    }

    public function assignments()
    {
        return view('teacher.assignments');
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
