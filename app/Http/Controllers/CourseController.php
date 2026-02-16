<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $title = 'Mata Kuliah';
        $user = Auth::user();

        $datas = Course::select(['id', 'name', 'description'])->orderBy('created_at', 'desc')->get();

        if ($user->role === 'Dosen') {
            $courses = Course::select(['id', 'name', 'description'])->orderBy('created_at', 'desc')->get();
        } else {
            $courses = CourseStudent::select(['id', 'student_id', 'course_id'])->with('course')->orderBy('created_at', 'desc')->get();
        }
        return view('mata-kuliah.index', compact('courses', 'datas', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'lecturer_id' => Auth::id()
        ]);

        return back()->with('success', "Mata Kuliah '{$request->name}' Berhasil Ditambahkan!");
    }

    // public function enroll(Request $request)
    // {
    //     $request->validate([
    //         'items' => 'required|array',
    //         'items.*' => 'required|exists:courses,id',
    //     ]);

    //     // $course = Course::findOrFail($id);

    //     auth()->user()
    //         ->enrolledCourses()
    //         ->syncWithoutDetaching($request->items);

    //     return redirect()->back()->with('success', 'Berhasil Mendaftar Mata Kuliah!');
    // }

    public function enroll($id)
    {
        $course = Course::findOrFail($id);

        $student = auth()->user();

        if ($student->enrolledCourses()->where('course_id', $id)->exists()) {
            return redirect()->back()
                ->with('error', 'Anda sudah terdaftar di mata kuliah ini.');
        }

        $student->enrolledCourses()->attach($id);

        return redirect()->back()
            ->with('success', 'Berhasil mendaftar mata kuliah!');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $course = Course::findOrFail($id);

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'lecturer_id' => Auth::id()
        ]);

        return redirect()->back()->with('updateSuccess', 'Mata Kuliah Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $courseName = $course->name;

        $course->delete();

        return redirect()->back()->with('deleteSuccess', "Mata Kuliah '{$courseName}' Berhasil Dihapus!");
    }
}
