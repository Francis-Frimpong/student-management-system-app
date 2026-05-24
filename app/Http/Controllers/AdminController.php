<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Students;
use App\Models\User;
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
          $users = DB::table('users')
            ->whereIn('role', ['parent', 'teacher'])
            ->get();
        return view('admin.users', compact('users'));
    }


    public function classes()
    {
        $classes = SchoolClass::with('teacher')->get();
        return view('admin.classes', compact('classes'));
    }

    
    public function students()
    {
        $students = Students::all();
        return view('admin.students', compact('students'));
    }


     public function addstudents(){
        $schoolclass = SchoolClass::all();
        
        $users = DB::table('users')
        ->select('id', 'name')
        ->where('role', 'parent')
        ->get();

        return view('admin.addstudents', compact('users', 'schoolclass'));
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
           $request->validate([
            'name' => 'required|min:2',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|min:8',

            'role' => 'required'
        ]);
    
        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

            'role' => $request->role
        ]);

        return redirect()->route('admin.users');
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
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|min:2',

            // current user already has email so ignore it ".$user->id"
            'email' => 'required|email|unique:users,email,' . $user->id,

            'password' => 'nullable|min:8',

            'role' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        // Only update password if user entered one
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('admin.users');
    }

    // display add classes page
    public function addclass()
    {
        $users = DB::table('users')
        ->select('id', 'name')
        ->where('role', 'teacher')
        ->get();

        return view('admin.addclass', compact('users'));
    }

    public function storeclass(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'teacher_id' => 'required'
        ]);

        SchoolClass::create([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id

        ]);

        return redirect()->route('admin.classes');

    }

   
}
