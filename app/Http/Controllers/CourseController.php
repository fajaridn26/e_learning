<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $title = 'Mata Kuliah';
        $courses = Course::select(['id', 'name', 'description'])->orderBy('created_at', 'asc')->get();
        return view('mata-kuliah.index', compact('courses', 'title'));
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

        return redirect()->back()->with('success', "Mata Kuliah '{$request->name}' Berhasil Dibuat!");
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
