<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $title = 'Laporan & Statistik';

       $students = User::withCount('submission')
    ->withAvg('submission', 'score')
    ->withMax('submission', 'score')
    ->withMin('submission', 'score')
    ->where('role', 'Mahasiswa')
    ->get();


        return view('laporan.index', compact('title', 'students'));
    }
    public function courses()
    {
        $courses = Course::select(['id', 'name'])->withCount('students')->orderBy('students_count', 'desc')->get();
        $labels = $courses->pluck('name');
        $data = $courses->pluck('students_count');

        return response()->json([
            'labels' => $labels,
            'data' => $data
        ]);
    }

    public function assignments()
    {
        $total = Submission::count();

        $scored = Submission::whereNotNull('score')->count();

        $notScored = $total - $scored;

        return response()->json([
            'labels' => ['Sudah Dinilai', 'Belum Dinilai'],
            'data' => [
                (int) $scored,
                (int) $notScored
            ]
        ]);
    }

    public function students($id)
    {
        $title = 'Detail Tugas dan Nilai';
        $students = User::where('role', 'Mahasiswa')
        ->with(['submission.assignment.course'])
        ->findOrFail($id);
        // dd($students);
        return view('laporan.detail', compact('title', 'students'));
        
    }
}
