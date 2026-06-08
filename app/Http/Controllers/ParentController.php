<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Students;
use App\Models\Messages;


class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalChildren = Auth::user()->students()->count();

        $parentId = Auth::id();

        $combined = Students::where('parent_id', $parentId)
            ->join('attendances', 'attendances.student_id', '=', 'students.id')
            ->selectRaw("
                ROUND(
                    (SUM(CASE WHEN attendances.status = 'present' THEN 1 ELSE 0 END) * 100.0)
                    / COUNT(attendances.id),
                2) as combined_attendance_rate
            ")
            ->value('combined_attendance_rate');

        return view('parent.dashboard', compact('totalChildren', 'combined'));
        
    }
    public function children()
    {
        $parent = Auth::user();

        $children = $parent->children()->with('studentclass')->get();

        return view('parent.children', compact('children'));
        
    }
    public function attendance()
    {
        $children = Auth::user()->children()->with('attendances')->get();

        return view('parent.attendance', compact('children'));
        
    }
    public function message()
    {
         $messages = Messages::with('sender')
        ->where('receiver_id', Auth::id())
        ->get();
        return view('parent.message', compact('messages'));
        
    }

    public function composeMessage()
    {
        $users = DB::table('users')
        ->whereIn('role',['teacher'])
        ->get();

        return view('parent.composeMessage', compact('users'));
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

        return redirect()->route('parent.message');
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
