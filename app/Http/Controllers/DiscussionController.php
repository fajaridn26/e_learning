<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discussions;
use App\Models\Replies;

class DiscussionController extends Controller
{
    public function index()
    {
        $title = 'Forum Diskusi';
        $discussions = Discussions::select(['id', 'course_id', 'user_id', 'content', 'created_at'])->with('course', 'user')->orderBy('created_at', 'desc')->get();
        $courses = Course::select(['id', 'name', 'description'])->orderBy('created_at', 'desc')->get();
        // dd($discussions);
        return view('forum-diskusi.index', compact('title', 'discussions', 'courses'));
    }

    public function showDetailDiskusi($id)
    {
        $title = 'Detail Diskusi';
        $discussions = Discussions::select(['id', 'course_id', 'user_id', 'content'])->with('course', 'user')->where('id', $id)->orderBy('created_at', 'desc')->get();
        $replies = Replies::select('id', 'discussion_id', 'user_id', 'content', 'created_at')->with('user')->where('discussion_id', $id)->orderBy('created_at', 'desc')->get();
        // dd($replies);
        return view('forum-diskusi.detail', compact('title', 'discussions', 'replies'));
    }
}
