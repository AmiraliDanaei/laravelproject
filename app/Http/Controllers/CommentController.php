<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(Comment::with(['post', 'user'])->get());
    }

    public function create()
    {
        return response()->json(['message' => 'Show create comment form']);
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment);
    }

    public function show(Comment $comment)
    {
        return response()->json($comment->load(['post', 'user']));
    }

    public function edit(Comment $comment)
    {
        return response()->json(['message' => 'Show edit comment form', 'comment' => $comment]);
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return response()->json($comment);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
