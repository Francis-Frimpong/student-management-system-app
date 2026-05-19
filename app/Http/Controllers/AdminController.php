<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Students;
use App\Models\SchoolClass;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalTeachers = DB::table('users')
            ->where('role', 'teacher')
            ->count();

        $totalParents = DB::table('users')
            ->where('role', 'parent')
            ->count();

        $totalStudents = Students::count('name');
        $totalClasses = SchoolClass::count('name');

        return view('admin.dashboard', compact(
            'totalTeachers',
            'totalParents',
            'totalStudents',
            'totalClasses'
        ));

    }

    public function users()
    {
        return view('admin.users');
    }


    public function classes()
    {
        return view('admin.classes');
    }

    
    public function students()
    {
        return view('admin.students');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addusers');
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
