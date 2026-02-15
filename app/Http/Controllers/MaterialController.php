<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $title = 'Materi Kuliah';
        $materials = Material::select(['id', 'title', 'file_path', 'course_id'])->with('course')->orderBy('created_at', 'desc')->get();
        $courses = Course::select(['id', 'name', 'description'])->orderBy('created_at', 'desc')->get();
        return view('materi-kuliah.index', compact('title', 'materials', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required|string|max:255',
            'file_path' => 'required|file|max:3000',
        ]);

        $file = $request->file('file_path');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('materials', $fileName, 'public');

        Material::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'file_path' => $filePath
        ]);

        return redirect()->back()->with('success', 'Materi Kuliah Berhasil Ditambahkan!');
    }

    public function download($id)
    {
        $material = Material::findOrFail($id);

        // Ambil nama file saja dari path
        $fileName = basename($material->file_path); // contoh: file.pdf atau file.pptx
        $filePath = 'materials/' . $fileName; // relatif dari storage/app/public

        // Cek apakah file ada di disk public
        if (!Storage::disk('public')->exists($filePath)) {
            return redirect()->back()->with('error', 'File tidak ditemukan');
        }

        // Download file, browser otomatis mendeteksi tipe file
        return Storage::disk('public')->download($filePath, $fileName);
    }
}
