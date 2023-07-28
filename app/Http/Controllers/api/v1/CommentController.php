<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\CommentStoreRequest;
use App\Http\Requests\api\v1\CommentUpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::orderBy('message','asc')->get();
        return response()->json(['data' => $comments],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request)
    {
        $comment = Comment::create($request->all());
        return response()->json(['data' => $comment],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return response()->json(['data' => $comment],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentUpdateRequest $request, Comment $comment)
    {
        $comment->update($request->all());
        return response()->json(['data' => $comment],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json([],204);
    }
}
