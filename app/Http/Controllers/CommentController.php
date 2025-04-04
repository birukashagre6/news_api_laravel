<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Get all comments
    public function index()
    {
        return response()->json(Comment::all());
    }

    // Store a new comment
    public function store(Request $request)
    {
        $validated = $request->validate([
            'articleId' => 'required|string',
            'comment' => 'required|string',
            'timestamp' => 'required|integer'
        ]);

        $comment = Comment::create($validated);

        return response()->json($comment, 201);
    }

    // Show a single comment
    public function show($id)
    {
        return response()->json(Comment::findOrFail($id));
    }

    // Update a comment
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        return response()->json($comment);
    }

    // Delete a comment
    public function destroy($id)
    {
        Comment::destroy($id);
        return response()->json(['message' => 'Comment deleted']);
    }
}
