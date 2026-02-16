<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
        ]);

        Assignment::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return back()->with('success', 'Tugas Berhasil Ditambahkan!');
    }
}
