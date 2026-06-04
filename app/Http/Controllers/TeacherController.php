<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Messages;
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

        $totalAssignments = Auth::user()->assignment()->count();

        return view('teacher.dashboard', compact('totalClasses','totalStudents', 'totalAssignments'));
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
        $assignments = Assignments::where('teacher_id', Auth::id())
        ->latest()
        ->get();

        return view('teacher.assignments', compact('classes', 'assignments'));
    }

    public function storeassignments(Request $request)
    {
        // validate data
        $request->validate([
            'title'=> 'required|min:5',
            'description' => 'required',
            'class_id' => 'required',
        ]);

         // Check if class belongs to logged-in teacher
            $class = Auth::user()
                ->classes()
                ->where('id', $request->class_id)
                ->first();

            if (!$class) {
                abort(403);
            }
        // store in database
        Assignments::create([
            'title' => $request->title,
            'description' => $request->description,
            'class_id' => $request->class_id,
            'teacher_id' => Auth::id(),
        ]);

          return redirect()->back()->with('success', 'Assignment created successfully');
    }

    public function messages()
    {
         $messages = Messages::with('sender')
        ->where('receiver_id', Auth::id())
        ->get();

        return view('teacher.messages', compact('messages'));
    }

    public function composeMessage()
    {
         $users = DB::table('users')
            ->whereIn('role', ['parent', 'admin'])
            ->get();

        return view('teacher.composeMessage', compact('users'));
    }

     public function storeMessage(Request $request)
    {
         $request->validate([
            'receiver_id' => 'required',
            'message' => 'required'
        ]);

        Messages::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);

        return redirect()->route('teacher.messages');
    }

    public function sentMessage()
    {
         $messages = Messages::with('receiver')
        ->where('sender_id', Auth::id())
        ->get();
        return view('teacher.sentMessage', compact('messages'));
        
    }

    public function viewMessage(string $id)
    {
         $message = Messages::findOrFail($id);
        return view('teacher.viewMessage' ,compact('message'));
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
