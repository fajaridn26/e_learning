<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Tugas';
        $studentId = auth()->id();
        // dd($studentId);
        $courses = Course::select(['id', 'name', 'description'])->get();

        $assignments = Assignment::with([
            'course',
            'submission' => function ($query) use ($studentId) {
                $query->where('student_id', $studentId);
            }
        ])->orderBy('created_at', 'desc')->get();
        dd($assignments);

        return view('tugas.index', compact('title', 'assignments', 'courses'));
    }

    public function showTugasMahasiswa($assignmentId)
    {
        $title = 'Penilaian Tugas';
        $submissions = Submission::select(['id', 'assignment_id', 'student_id', 'file_path', 'score'])->with(['assignment.course', 'student'])->orderBy('created_at', 'desc')->where('assignment_id', $assignmentId)->get();
        // dd($submissions);
        return view('tugas.detail', compact('title', 'submissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required',
            'student_id' => 'required',
            'file_path' => 'required|file|max:3000',
        ]);

        $file = $request->file('file_path');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('submissions', $fileName, 'public');

        Submission::create([
            'assignment_id' => $request->assignment_id,
            'student_id' => $request->student_id,
            'file_path' => $filePath,
        ]);

        return back()->with('success', 'Tugas Berhasil Dikumpulkan!');
    }

    public function grade(Request $request, $id)
    {
        $request->validate([
            'score' => 'required|numeric|digits_between:1,3',
        ]);

        $submissions = Submission::findOrFail($id);

        $submissions->update([
            'score' => $request->score,
        ]);

        return back()->with('success', 'Tugas Berhasil Dinilai!');
    }
}
