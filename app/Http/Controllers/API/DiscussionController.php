<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Discussions;
use App\Models\Replies;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'content' => 'required|string'
        ]);

        $discussion = Discussions::create([
            'course_id' => $request->course_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return response()->json([
            'message' => 'Topik Diskusi berhasil dibuat',
            'data' => $discussion
        ], 201);
    }

    public function replies(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        $discussion = Discussions::findOrFail($id);

        $reply = $discussion->replies()->create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return response()->json([
            'message' => 'Komentar Berhasil Ditambahkan!',
            'data' => $reply
        ], 201);
    }
}
